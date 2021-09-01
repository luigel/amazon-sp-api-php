<?php
/**
 * ReportsApi.
 *
 * @author   Stefan Neuhaus
 */

/**
 * Selling Partner API for Reports.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * OpenAPI spec version: 2021-06-30
 */

namespace Luigel\AmazonSellingPartnerAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use Luigel\AmazonSellingPartnerAPI\ApiException;
use Luigel\AmazonSellingPartnerAPI\Configuration;
use Luigel\AmazonSellingPartnerAPI\HeaderSelector;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;
use Luigel\AmazonSellingPartnerAPI\Models\Reports\Report;
use Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportList;
use Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportDocument;
use Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportSchedule;
use Luigel\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportResult;
use Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList;
use Luigel\AmazonSellingPartnerAPI\Models\Reports\CancelReportResponse;
use Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportSpecification;
use Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportScheduleResult;
use Luigel\AmazonSellingPartnerAPI\Models\Reports\CancelReportScheduleResponse;

/**
 * ReportsApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus
 */
class ReportsApi
{
    use SellingPartnerApiRequest;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    public function __construct(Configuration $config)
    {
        $this->client = new Client();
        $this->config = $config;
        $this->headerSelector = new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation cancelReport.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Reports\CancelReportResponse
     */
    public function cancelReport($report_id)
    {
        [$response] = $this->cancelReportWithHttpInfo($report_id);

        return $response;
    }

    /**
     * Operation cancelReportWithHttpInfo.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Reports\CancelReportResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelReportWithHttpInfo($report_id)
    {
        $request = $this->cancelReportRequest($report_id);

        return $this->sendRequest($request, CancelReportResponse::class);
    }

    /**
     * Create request for operation 'cancelReport'.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function cancelReportRequest($report_id)
    {
        // verify the required parameter 'report_id' is set
        if (null === $report_id || (is_array($report_id) && 0 === count($report_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $report_id when calling cancelReport');
        }

        $resourcePath = '/reports/2021-06-30/reports/{reportId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $report_id) {
            $resourcePath = str_replace(
                '{'.'reportId'.'}',
                ObjectSerializer::toPathValue($report_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'DELETE', $httpBody);
    }

    /**
     * Operation cancelReportAsync.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelReportAsync($report_id)
    {
        return $this->cancelReportAsyncWithHttpInfo($report_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelReportAsyncWithHttpInfo.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelReportAsyncWithHttpInfo($report_id)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Reports\CancelReportResponse';
        $request = $this->cancelReportRequest($report_id);

        return $this->sendRequestAsync($request, CancelReportResponse::class);
    }

    /**
     * Operation cancelReportSchedule.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Reports\CancelReportScheduleResponse
     */
    public function cancelReportSchedule($report_schedule_id)
    {
        [$response] = $this->cancelReportScheduleWithHttpInfo($report_schedule_id);

        return $response;
    }

    /**
     * Operation cancelReportScheduleWithHttpInfo.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Reports\CancelReportScheduleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelReportScheduleWithHttpInfo($report_schedule_id)
    {
        $request = $this->cancelReportScheduleRequest($report_schedule_id);

        return $this->sendRequest($request, CancelReportScheduleResponse::class);
    }

    /**
     * Create request for operation 'cancelReportSchedule'.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function cancelReportScheduleRequest($report_schedule_id)
    {
        // verify the required parameter 'report_schedule_id' is set
        if (null === $report_schedule_id || (is_array($report_schedule_id) && 0 === count($report_schedule_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $report_schedule_id when calling cancelReportSchedule');
        }

        $resourcePath = '/reports/2021-06-30/schedules/{reportScheduleId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $report_schedule_id) {
            $resourcePath = str_replace(
                '{'.'reportScheduleId'.'}',
                ObjectSerializer::toPathValue($report_schedule_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'DELETE', $httpBody);
    }

    /**
     * Operation cancelReportScheduleAsync.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelReportScheduleAsync($report_schedule_id)
    {
        return $this->cancelReportScheduleAsyncWithHttpInfo($report_schedule_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelReportScheduleAsyncWithHttpInfo.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelReportScheduleAsyncWithHttpInfo($report_schedule_id)
    {
        $request = $this->cancelReportScheduleRequest($report_schedule_id);

        return $this->sendRequestAsync($request, CancelReportScheduleResponse::class);
    }

    /**
     * Operation createReport.
     *
     * @param CreateReportSpecification $body body (required)
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportResult
     */
    public function createReport(CreateReportSpecification $body)
    {
        [$response] = $this->createReportWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation createReportWithHttpInfo.
     *
     * @param CreateReportSpecification $body (required)
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function createReportWithHttpInfo(CreateReportSpecification $body)
    {
        $request = $this->createReportRequest($body);

        return $this->sendRequest($request, CreateReportResult::class);
    }

    /**
     * Create request for operation 'createReport'.
     *
     * @param CreateReportSpecification $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createReportRequest(CreateReportSpecification $body)
    {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createReport');
        }

        $resourcePath = '/reports/2021-06-30/reports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation createReportAsync.
     *
     * @param CreateReportSpecification $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createReportAsync($body)
    {
        return $this->createReportAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createReportAsyncWithHttpInfo.
     *
     * @param CreateReportSpecification $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createReportAsyncWithHttpInfo($body)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportResult';
        $request = $this->createReportRequest($body);

        return $this->sendRequestAsync($request, CreateReportResult::class);
    }

    /**
     * Operation createReportSchedule.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportScheduleSpecification $body body (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportScheduleResult
     */
    public function createReportSchedule($body)
    {
        [$response] = $this->createReportScheduleWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation createReportScheduleWithHttpInfo.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportScheduleSpecification $body (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportScheduleResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function createReportScheduleWithHttpInfo($body)
    {
        $request = $this->createReportScheduleRequest($body);

        return $this->sendRequest($request, CreateReportScheduleResult::class);
    }

    /**
     * Create request for operation 'createReportSchedule'.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportScheduleSpecification $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createReportScheduleRequest($body)
    {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createReportSchedule');
        }

        $resourcePath = '/reports/2021-06-30/schedules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation createReportScheduleAsync.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportScheduleSpecification $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createReportScheduleAsync($body)
    {
        return $this->createReportScheduleAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createReportScheduleAsyncWithHttpInfo.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Reports\CreateReportScheduleSpecification $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createReportScheduleAsyncWithHttpInfo($body)
    {
        $request = $this->createReportScheduleRequest($body);

        return $this->sendRequestAsync($request, CreateReportScheduleResult::class);
    }

    /**
     * Operation getReport.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Reports\Report
     */
    public function getReport($report_id)
    {
        [$response] = $this->getReportWithHttpInfo($report_id);

        return $response;
    }

    /**
     * Operation getReportWithHttpInfo.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Reports\Report, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportWithHttpInfo($report_id)
    {
        $request = $this->getReportRequest($report_id);

        return $this->sendRequest($request, Report::class);
    }

    /**
     * Create request for operation 'getReport'.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getReportRequest($report_id)
    {
        // verify the required parameter 'report_id' is set
        if (null === $report_id || (is_array($report_id) && 0 === count($report_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $report_id when calling getReport');
        }

        $resourcePath = '/reports/2021-06-30/reports/{reportId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $report_id) {
            $resourcePath = str_replace(
                '{'.'reportId'.'}',
                ObjectSerializer::toPathValue($report_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getReportAsync.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportAsync($report_id)
    {
        return $this->getReportAsyncWithHttpInfo($report_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportAsyncWithHttpInfo.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportAsyncWithHttpInfo($report_id)
    {
        $request = $this->getReportRequest($report_id);

        return $this->sendRequestAsync($request, Report::class);
    }

    /**
     * Operation getReportDocument.
     *
     * @param string $report_document_id The identifier for the report document. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportDocument
     */
    public function getReportDocument($report_document_id)
    {
        [$response] = $this->getReportDocumentWithHttpInfo($report_document_id);

        return $response;
    }

    /**
     * Operation getReportDocumentWithHttpInfo.
     *
     * @param string $report_document_id The identifier for the report document. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportDocument, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportDocumentWithHttpInfo($report_document_id)
    {
        $request = $this->getReportDocumentRequest($report_document_id);

        return $this->sendRequest($request, ReportDocument::class);
    }

    /**
     * Create request for operation 'getReportDocument'.
     *
     * @param string $report_document_id The identifier for the report document. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getReportDocumentRequest($report_document_id)
    {
        // verify the required parameter 'report_document_id' is set
        if (null === $report_document_id || (is_array($report_document_id) && 0 === count($report_document_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $report_document_id when calling getReportDocument');
        }

        $resourcePath = '/reports/2021-06-30/documents/{reportDocumentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $report_document_id) {
            $resourcePath = str_replace(
                '{'.'reportDocumentId'.'}',
                ObjectSerializer::toPathValue($report_document_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getReportDocumentAsync.
     *
     * @param string $report_document_id The identifier for the report document. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportDocumentAsync($report_document_id)
    {
        return $this->getReportDocumentAsyncWithHttpInfo($report_document_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportDocumentAsyncWithHttpInfo.
     *
     * @param string $report_document_id The identifier for the report document. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportDocumentAsyncWithHttpInfo($report_document_id)
    {
        $request = $this->getReportDocumentRequest($report_document_id);

        return $this->sendRequestAsync($request, ReportDocument::class);
    }

    /**
     * Operation getReportSchedule.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportSchedule
     */
    public function getReportSchedule($report_schedule_id)
    {
        [$response] = $this->getReportScheduleWithHttpInfo($report_schedule_id);

        return $response;
    }

    /**
     * Operation getReportScheduleWithHttpInfo.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportSchedule, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportScheduleWithHttpInfo($report_schedule_id)
    {
        $request = $this->getReportScheduleRequest($report_schedule_id);

        return $this->sendRequest($request, ReportSchedule::class);
    }

    /**
     * Create request for operation 'getReportSchedule'.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getReportScheduleRequest($report_schedule_id)
    {
        // verify the required parameter 'report_schedule_id' is set
        if (null === $report_schedule_id || (is_array($report_schedule_id) && 0 === count($report_schedule_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $report_schedule_id when calling getReportSchedule');
        }

        $resourcePath = '/reports/2021-06-30/schedules/{reportScheduleId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $report_schedule_id) {
            $resourcePath = str_replace(
                '{'.'reportScheduleId'.'}',
                ObjectSerializer::toPathValue($report_schedule_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getReportScheduleAsync.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportScheduleAsync($report_schedule_id)
    {
        return $this->getReportScheduleAsyncWithHttpInfo($report_schedule_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportScheduleAsyncWithHttpInfo.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportScheduleAsyncWithHttpInfo($report_schedule_id)
    {
        $request = $this->getReportScheduleRequest($report_schedule_id);

        return $this->sendRequestAsync($request, ReportSchedule::class);
    }

    /**
     * Operation getReportSchedules.
     *
     * @param string[] $report_types A list of report types used to filter report schedules. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList
     */
    public function getReportSchedules($report_types)
    {
        [$response] = $this->getReportSchedulesWithHttpInfo($report_types);

        return $response;
    }

    /**
     * Operation getReportSchedulesWithHttpInfo.
     *
     * @param string[] $report_types A list of report types used to filter report schedules. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportSchedulesWithHttpInfo($report_types)
    {
        $request = $this->getReportSchedulesRequest($report_types);

        return $this->sendRequest($request, ReportScheduleList::class);

        try {
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
                if (! in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportScheduleList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'getReportSchedules'.
     *
     * @param string[] $report_types A list of report types used to filter report schedules. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getReportSchedulesRequest($report_types)
    {
        // verify the required parameter 'report_types' is set
        if (null === $report_types || (is_array($report_types) && 0 === count($report_types))) {
            throw new \InvalidArgumentException('Missing the required parameter $report_types when calling getReportSchedules');
        }

        $resourcePath = '/reports/2021-06-30/schedules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($report_types)) {
            $report_types = ObjectSerializer::serializeCollection($report_types, 'csv', true);
        }
        if (null !== $report_types) {
            $queryParams['reportTypes'] = ObjectSerializer::toQueryValue($report_types);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getReportSchedulesAsync.
     *
     * @param string[] $report_types A list of report types used to filter report schedules. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportSchedulesAsync($report_types)
    {
        return $this->getReportSchedulesAsyncWithHttpInfo($report_types)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportSchedulesAsyncWithHttpInfo.
     *
     * @param string[] $report_types A list of report types used to filter report schedules. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportSchedulesAsyncWithHttpInfo($report_types)
    {
        $request = $this->getReportSchedulesRequest($report_types);

        return $this->sendRequestAsync($request, ReportScheduleList::class);
    }

    /**
     * Operation getReports.
     *
     * @param string[] $report_types A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. (optional)
     * @param string[] $processing_statuses A list of processing statuses used to filter reports. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of reports to return in a single call. (optional, default to 10)
     * @param \DateTime $created_since The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. (optional)
     * @param \DateTime $created_until The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportList
     */
    public function getReports($report_types = null, $processing_statuses = null, $marketplace_ids = null, $page_size = '10', $created_since = null, $created_until = null, $next_token = null)
    {
        [$response] = $this->getReportsWithHttpInfo($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token);

        return $response;
    }

    /**
     * Operation getReportsWithHttpInfo.
     *
     * @param string[] $report_types A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. (optional)
     * @param string[] $processing_statuses A list of processing statuses used to filter reports. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of reports to return in a single call. (optional, default to 10)
     * @param \DateTime $created_since The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. (optional)
     * @param \DateTime $created_until The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportsWithHttpInfo($report_types = null, $processing_statuses = null, $marketplace_ids = null, $page_size = '10', $created_since = null, $created_until = null, $next_token = null)
    {
        $request = $this->getReportsRequest($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token);

        return $this->sendRequest($request, ReportList::class);
    }

    /**
     * Create request for operation 'getReports'.
     *
     * @param string[] $report_types A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. (optional)
     * @param string[] $processing_statuses A list of processing statuses used to filter reports. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of reports to return in a single call. (optional, default to 10)
     * @param \DateTime $created_since The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. (optional)
     * @param \DateTime $created_until The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getReportsRequest($report_types = null, $processing_statuses = null, $marketplace_ids = null, $page_size = '10', $created_since = null, $created_until = null, $next_token = null)
    {
        $resourcePath = '/reports/2021-06-30/reports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($report_types)) {
            $report_types = ObjectSerializer::serializeCollection($report_types, 'csv', true);
        }
        if (null !== $report_types) {
            $queryParams['reportTypes'] = ObjectSerializer::toQueryValue($report_types);
        }
        // query params
        if (is_array($processing_statuses)) {
            $processing_statuses = ObjectSerializer::serializeCollection($processing_statuses, 'csv', true);
        }
        if (null !== $processing_statuses) {
            $queryParams['processingStatuses'] = ObjectSerializer::toQueryValue($processing_statuses);
        }
        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if (null !== $marketplace_ids) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }
        // query params
        if (null !== $page_size) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if (null !== $created_since) {
            $queryParams['createdSince'] = ObjectSerializer::toQueryValue($created_since);
        }
        // query params
        if (null !== $created_until) {
            $queryParams['createdUntil'] = ObjectSerializer::toQueryValue($created_until);
        }
        // query params
        if (null !== $next_token) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($next_token);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getReportsAsync.
     *
     * @param string[] $report_types A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. (optional)
     * @param string[] $processing_statuses A list of processing statuses used to filter reports. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of reports to return in a single call. (optional, default to 10)
     * @param \DateTime $created_since The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. (optional)
     * @param \DateTime $created_until The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportsAsync($report_types = null, $processing_statuses = null, $marketplace_ids = null, $page_size = '10', $created_since = null, $created_until = null, $next_token = null)
    {
        return $this->getReportsAsyncWithHttpInfo($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportsAsyncWithHttpInfo.
     *
     * @param string[] $report_types A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. (optional)
     * @param string[] $processing_statuses A list of processing statuses used to filter reports. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of reports to return in a single call. (optional, default to 10)
     * @param \DateTime $created_since The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. (optional)
     * @param \DateTime $created_until The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportsAsyncWithHttpInfo($report_types = null, $processing_statuses = null, $marketplace_ids = null, $page_size = '10', $created_since = null, $created_until = null, $next_token = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Reports\ReportList';
        $request = $this->getReportsRequest($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token);

        return $this->sendRequestAsync($request, ReportList::class);
    }
}
