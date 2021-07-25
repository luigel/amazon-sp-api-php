<?php

namespace Luigel\AmazonSellingPartnerAPI\Helpers;

use Luigel\AmazonSellingPartnerAPI\ApiException;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;
use Luigel\AmazonSellingPartnerAPI\Signature;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Utils;
use Illuminate\Support\Facades\Log;
/**
 * Trait SellingPartnerApiRequest.
 *
 * @author Stefan Neuhaus / Luigel
 */
trait SellingPartnerApiRequest
{
    private function generateRequest(
        bool $multipart,
        array $formParams,
        array $queryParams,
        string $resourcePath,
        array $headerParams,
        string $method,
        $httpBody
    ): Request {
        if (null != $formParams) {
            ksort($formParams);
        }
        if (null != $queryParams) {
            ksort($queryParams);
        }
        // body params
        $_tempBody = $httpBody;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && 'application/json' === $headers['Content-Type']) {
                $httpBody = Utils::jsonEncode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue,
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ('application/json' === $headers['Content-Type']) {
                $httpBody = Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }
        $query = Query::build($queryParams);
        $amazonHeader = Signature::calculateSignature(
            $this->config,
            str_replace('https://', '', $this->config->getHost()),
            $method,
            $resourcePath,
            $query,
            (string) $httpBody,
        );
        $headers = array_merge(
            $headerParams,
            $headers,
            $amazonHeader
        );
        return new Request(
            $method,
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
    /**
     * @throws ApiException
     */
    private function sendRequest(Request $request, string $returnType, int $retry = 0): array
    {
        $response = null;
        try {
            Log::info('SP-API Request => URL: ' . $request->getUri()->getPath());
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null);
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }
            $responseBody = $response->getBody();
            if ('\SplFileObject' === $returnType) {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }
            //check for rate limit
            $this->checkRateLimit($response);
            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            //we allow 4 retries only
            if ($e->getCode() === 429 && $retry < 4) {
                $retry++;
                //increment by 6 seconds per retry (6, 12, 18, 24)
                $sleepRetry = 6 * $retry;
                Log::info('SP-API Response => Error QuotaExceed: Sleeping for ' . $sleepRetry . ' secs before retrying. Retry count = ' . $retry);
                sleep($sleepRetry);
                return $this->sendRequest($request, $returnType, $retry);
            } else if ($e->getCode() === 429 && $retry >= 4) {
                Log::info('SP-API Response => Error QuotaExceed: Failed to retry. Maxinum of 4 tries.');
            }
            switch ($e->getCode()) {
                case 503:
                case 500:
                case 429:
                case 404:
                case 403:
                case 401:
                case 400:
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            Log::error('SP-API Response => ERROR: ' . $request->getUri()->getPath() . ', CODE: ' . $e->getCode() . ', MESSAGE: '  . $e->getMessage());
            throw $e;
        }
    }
    private function checkRateLimit($response) {
        $rateLimit = $response->getHeader('x-amzn-RateLimit-Limit');
        if ($rateLimit && count($rateLimit) > 0 && (float)$rateLimit[0] > 0) {
            $rateLimit = 1 / (float)$rateLimit[0];
            if ($rateLimit < 1) $rateLimit = 1;
            Log::info('SP-API Response => RateLimit: '. $rateLimit . ' - Sleeping for ' .  $rateLimit . ' sec(s).');
            var_dump(date('Y-m-d H:m:s') . ' SP-API Response => RateLimit: '. $rateLimit . ' - Sleeping for ' .  $rateLimit . ' sec(s).');
            sleep($rateLimit);
        } else {
            Log::info('SP-API Response => RateLimit: NONE (setting to 1sec)');
            var_dump(date('Y-m-d H:m:s') . ' SP-API Response => RateLimit: NONE');
            sleep(1);
        }
    }
    /**
     * Create http client option.
     *
     * @throws \RuntimeException on file opening failure
     *
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * @throws ApiException
     *
     * @return mixed
     */
    private function sendRequestAsync(Request $request, string $returnType)
    {
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ('\SplFileObject' === $returnType) {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ('string' !== $returnType) {
                            $content = json_decode($content);
                        }
                    }
                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
                }
            );
    }
}