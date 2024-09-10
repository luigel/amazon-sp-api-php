<?php

namespace Luigel\AmazonSellingPartnerAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Luigel\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use Luigel\AmazonSellingPartnerAPI\Configuration;
use Luigel\AmazonSellingPartnerAPI\HeaderSelector;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

class ShippingApi
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

    /**
     * @param ClientInterface $client
     */
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
     * Operation cancelShipment
     *
     * @param  string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\CancelShipmentResponse
     */
    public function cancelShipment($shipment_id, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->cancelShipmentWithHttpInfo($shipment_id, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation cancelShipmentWithHttpInfo
     *
     * @param  string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\CancelShipmentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelShipmentWithHttpInfo($shipment_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\CancelShipmentResponse';
        $request = $this->cancelShipmentRequest($shipment_id, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation cancelShipmentAsync
     *
     *
     *
     * @param  string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelShipmentAsync($shipment_id, $x_amzn_shipping_business_id = null)
    {
        return $this->cancelShipmentAsyncWithHttpInfo($shipment_id, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelShipmentAsyncWithHttpInfo
     *
     *
     *
     * @param  string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelShipmentAsyncWithHttpInfo($shipment_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\CancelShipmentResponse';
        $request = $this->cancelShipmentRequest($shipment_id, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'cancelShipment'
     *
     * @param  string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function cancelShipmentRequest($shipment_id, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'shipment_id' is set
        if ($shipment_id === null || (is_array($shipment_id) && count($shipment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shipment_id when calling cancelShipment'
            );
        }

        $resourcePath = '/shipping/v2/shipments/{shipmentId}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        // path params
        if ($shipment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'shipmentId' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'DELETE', $httpBody);
    }

    /**
     * Operation directPurchaseShipment
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DirectPurchaseRequest $body body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $locale The IETF Language Tag. Note that this only supports the primary language subtag with one secondary language subtag (i.e. en-US, fr-CA). The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary language subtags. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DirectPurchaseResponse
     */
    public function directPurchaseShipment($body, $x_amzn_idempotency_key = null, $locale = null, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->directPurchaseShipmentWithHttpInfo($body, $x_amzn_idempotency_key, $locale, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation directPurchaseShipmentWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DirectPurchaseRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $locale The IETF Language Tag. Note that this only supports the primary language subtag with one secondary language subtag (i.e. en-US, fr-CA). The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary language subtags. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DirectPurchaseResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function directPurchaseShipmentWithHttpInfo($body, $x_amzn_idempotency_key = null, $locale = null, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\DirectPurchaseResponse';
        $request = $this->directPurchaseShipmentRequest($body, $x_amzn_idempotency_key, $locale, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation directPurchaseShipmentAsync
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DirectPurchaseRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $locale The IETF Language Tag. Note that this only supports the primary language subtag with one secondary language subtag (i.e. en-US, fr-CA). The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary language subtags. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function directPurchaseShipmentAsync($body, $x_amzn_idempotency_key = null, $locale = null, $x_amzn_shipping_business_id = null)
    {
        return $this->directPurchaseShipmentAsyncWithHttpInfo($body, $x_amzn_idempotency_key, $locale, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation directPurchaseShipmentAsyncWithHttpInfo
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DirectPurchaseRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $locale The IETF Language Tag. Note that this only supports the primary language subtag with one secondary language subtag (i.e. en-US, fr-CA). The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary language subtags. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function directPurchaseShipmentAsyncWithHttpInfo($body, $x_amzn_idempotency_key = null, $locale = null, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\DirectPurchaseResponse';
        $request = $this->directPurchaseShipmentRequest($body, $x_amzn_idempotency_key, $locale, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'directPurchaseShipment'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DirectPurchaseRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $locale The IETF Language Tag. Note that this only supports the primary language subtag with one secondary language subtag (i.e. en-US, fr-CA). The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary language subtags. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function directPurchaseShipmentRequest($body, $x_amzn_idempotency_key = null, $locale = null, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling directPurchaseShipment'
            );
        }

        $resourcePath = '/shipping/v2/shipments/directPurchase';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_idempotency_key !== null) {
            $headerParams['x-amzn-IdempotencyKey'] = ObjectSerializer::toHeaderValue($x_amzn_idempotency_key);
        }
        // header params
        if ($locale !== null) {
            $headerParams['locale'] = ObjectSerializer::toHeaderValue($locale);
        }
        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation generateCollectionForm
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerateCollectionFormRequest $body body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerateCollectionFormResponse
     */
    public function generateCollectionForm($body, $x_amzn_idempotency_key = null, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->generateCollectionFormWithHttpInfo($body, $x_amzn_idempotency_key, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation generateCollectionFormWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerateCollectionFormRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerateCollectionFormResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateCollectionFormWithHttpInfo($body, $x_amzn_idempotency_key = null, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerateCollectionFormResponse';
        $request = $this->generateCollectionFormRequest($body, $x_amzn_idempotency_key, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation generateCollectionFormAsync
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerateCollectionFormRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateCollectionFormAsync($body, $x_amzn_idempotency_key = null, $x_amzn_shipping_business_id = null)
    {
        return $this->generateCollectionFormAsyncWithHttpInfo($body, $x_amzn_idempotency_key, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateCollectionFormAsyncWithHttpInfo
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerateCollectionFormRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateCollectionFormAsyncWithHttpInfo($body, $x_amzn_idempotency_key = null, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerateCollectionFormResponse';
        $request = $this->generateCollectionFormRequest($body, $x_amzn_idempotency_key, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'generateCollectionForm'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerateCollectionFormRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function generateCollectionFormRequest($body, $x_amzn_idempotency_key = null, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling generateCollectionForm'
            );
        }

        $resourcePath = '/shipping/v2/collectionForms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_idempotency_key !== null) {
            $headerParams['x-amzn-IdempotencyKey'] = ObjectSerializer::toHeaderValue($x_amzn_idempotency_key);
        }
        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getAccessPoints
     *
     * @param  string[] $access_point_types access_point_types (required)
     * @param  string $country_code country_code (required)
     * @param  string $postal_code postal_code (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetAccessPointsResponse
     */
    public function getAccessPoints($access_point_types, $country_code, $postal_code, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->getAccessPointsWithHttpInfo($access_point_types, $country_code, $postal_code, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation getAccessPointsWithHttpInfo
     *
     * @param  string[] $access_point_types (required)
     * @param  string $country_code (required)
     * @param  string $postal_code (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetAccessPointsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccessPointsWithHttpInfo($access_point_types, $country_code, $postal_code, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetAccessPointsResponse';
        $request = $this->getAccessPointsRequest($access_point_types, $country_code, $postal_code, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getAccessPointsAsync
     *
     *
     *
     * @param  string[] $access_point_types (required)
     * @param  string $country_code (required)
     * @param  string $postal_code (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccessPointsAsync($access_point_types, $country_code, $postal_code, $x_amzn_shipping_business_id = null)
    {
        return $this->getAccessPointsAsyncWithHttpInfo($access_point_types, $country_code, $postal_code, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAccessPointsAsyncWithHttpInfo
     *
     *
     *
     * @param  string[] $access_point_types (required)
     * @param  string $country_code (required)
     * @param  string $postal_code (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccessPointsAsyncWithHttpInfo($access_point_types, $country_code, $postal_code, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetAccessPointsResponse';
        $request = $this->getAccessPointsRequest($access_point_types, $country_code, $postal_code, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getAccessPoints'
     *
     * @param  string[] $access_point_types (required)
     * @param  string $country_code (required)
     * @param  string $postal_code (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAccessPointsRequest($access_point_types, $country_code, $postal_code, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'access_point_types' is set
        if ($access_point_types === null || (is_array($access_point_types) && count($access_point_types) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $access_point_types when calling getAccessPoints'
            );
        }
        // verify the required parameter 'country_code' is set
        if ($country_code === null || (is_array($country_code) && count($country_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $country_code when calling getAccessPoints'
            );
        }
        // verify the required parameter 'postal_code' is set
        if ($postal_code === null || (is_array($postal_code) && count($postal_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $postal_code when calling getAccessPoints'
            );
        }

        $resourcePath = '/shipping/v2/accessPoints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($access_point_types)) {
            $access_point_types = ObjectSerializer::serializeCollection($access_point_types, 'csv', true);
        }
        if ($access_point_types !== null) {
            $queryParams['accessPointTypes'] = ObjectSerializer::toQueryValue($access_point_types, null);
        }
        // query params
        if ($country_code !== null) {
            $queryParams['countryCode'] = ObjectSerializer::toQueryValue($country_code, null);
        }
        // query params
        if ($postal_code !== null) {
            $queryParams['postalCode'] = ObjectSerializer::toQueryValue($postal_code, null);
        }
        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getAdditionalInputs
     *
     * @param  string $request_token The request token returned in the response to the getRates operation. (required)
     * @param  string $rate_id The rate identifier for the shipping offering (rate) returned in the response to the getRates operation. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetAdditionalInputsResponse
     */
    public function getAdditionalInputs($request_token, $rate_id, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->getAdditionalInputsWithHttpInfo($request_token, $rate_id, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation getAdditionalInputsWithHttpInfo
     *
     * @param  string $request_token The request token returned in the response to the getRates operation. (required)
     * @param  string $rate_id The rate identifier for the shipping offering (rate) returned in the response to the getRates operation. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetAdditionalInputsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAdditionalInputsWithHttpInfo($request_token, $rate_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetAdditionalInputsResponse';
        $request = $this->getAdditionalInputsRequest($request_token, $rate_id, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getAdditionalInputsAsync
     *
     *
     *
     * @param  string $request_token The request token returned in the response to the getRates operation. (required)
     * @param  string $rate_id The rate identifier for the shipping offering (rate) returned in the response to the getRates operation. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdditionalInputsAsync($request_token, $rate_id, $x_amzn_shipping_business_id = null)
    {
        return $this->getAdditionalInputsAsyncWithHttpInfo($request_token, $rate_id, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAdditionalInputsAsyncWithHttpInfo
     *
     *
     *
     * @param  string $request_token The request token returned in the response to the getRates operation. (required)
     * @param  string $rate_id The rate identifier for the shipping offering (rate) returned in the response to the getRates operation. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdditionalInputsAsyncWithHttpInfo($request_token, $rate_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetAdditionalInputsResponse';
        $request = $this->getAdditionalInputsRequest($request_token, $rate_id, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getAdditionalInputs'
     *
     * @param  string $request_token The request token returned in the response to the getRates operation. (required)
     * @param  string $rate_id The rate identifier for the shipping offering (rate) returned in the response to the getRates operation. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAdditionalInputsRequest($request_token, $rate_id, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'request_token' is set
        if ($request_token === null || (is_array($request_token) && count($request_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request_token when calling getAdditionalInputs'
            );
        }
        // verify the required parameter 'rate_id' is set
        if ($rate_id === null || (is_array($rate_id) && count($rate_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rate_id when calling getAdditionalInputs'
            );
        }

        $resourcePath = '/shipping/v2/shipments/additionalInputs/schema';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($request_token !== null) {
            $queryParams['requestToken'] = ObjectSerializer::toQueryValue($request_token, null);
        }
        // query params
        if ($rate_id !== null) {
            $queryParams['rateId'] = ObjectSerializer::toQueryValue($rate_id, null);
        }
        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }
        
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getCarrierAccountFormInputs
     *
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountFormInputsResponse
     */
    public function getCarrierAccountFormInputs($x_amzn_shipping_business_id = null)
    {
        list($response) = $this->getCarrierAccountFormInputsWithHttpInfo($x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation getCarrierAccountFormInputsWithHttpInfo
     *
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountFormInputsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCarrierAccountFormInputsWithHttpInfo($x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountFormInputsResponse';
        $request = $this->getCarrierAccountFormInputsRequest($x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getCarrierAccountFormInputsAsync
     *
     *
     *
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCarrierAccountFormInputsAsync($x_amzn_shipping_business_id = null)
    {
        return $this->getCarrierAccountFormInputsAsyncWithHttpInfo($x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCarrierAccountFormInputsAsyncWithHttpInfo
     *
     *
     *
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCarrierAccountFormInputsAsyncWithHttpInfo($x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountFormInputsResponse';
        $request = $this->getCarrierAccountFormInputsRequest($x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getCarrierAccountFormInputs'
     *
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCarrierAccountFormInputsRequest($x_amzn_shipping_business_id = null)
    {

        $resourcePath = '/shipping/v2/carrierAccountFormInputs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getCarrierAccounts
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountsRequest $body body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountsResponse
     */
    public function getCarrierAccounts($body, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->getCarrierAccountsWithHttpInfo($body, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation getCarrierAccountsWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountsRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCarrierAccountsWithHttpInfo($body, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountsResponse';
        $request = $this->getCarrierAccountsRequest($body, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getCarrierAccountsAsync
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountsRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCarrierAccountsAsync($body, $x_amzn_shipping_business_id = null)
    {
        return $this->getCarrierAccountsAsyncWithHttpInfo($body, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCarrierAccountsAsyncWithHttpInfo
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountsRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCarrierAccountsAsyncWithHttpInfo($body, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountsResponse';
        $request = $this->getCarrierAccountsRequest($body, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getCarrierAccounts'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCarrierAccountsRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCarrierAccountsRequest($body, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling getCarrierAccounts'
            );
        }

        $resourcePath = '/shipping/v2/carrierAccounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    /**
     * Operation getCollectionForm
     *
     * @param  string $collection_form_id collection form Id to reprint a collection. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormResponse
     */
    public function getCollectionForm($collection_form_id, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->getCollectionFormWithHttpInfo($collection_form_id, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation getCollectionFormWithHttpInfo
     *
     * @param  string $collection_form_id collection form Id to reprint a collection. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCollectionFormWithHttpInfo($collection_form_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormResponse';
        $request = $this->getCollectionFormRequest($collection_form_id, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getCollectionFormAsync
     *
     *
     *
     * @param  string $collection_form_id collection form Id to reprint a collection. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCollectionFormAsync($collection_form_id, $x_amzn_shipping_business_id = null)
    {
        return $this->getCollectionFormAsyncWithHttpInfo($collection_form_id, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCollectionFormAsyncWithHttpInfo
     *
     *
     *
     * @param  string $collection_form_id collection form Id to reprint a collection. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCollectionFormAsyncWithHttpInfo($collection_form_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormResponse';
        $request = $this->getCollectionFormRequest($collection_form_id, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getCollectionForm'
     *
     * @param  string $collection_form_id collection form Id to reprint a collection. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCollectionFormRequest($collection_form_id, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'collection_form_id' is set
        if ($collection_form_id === null || (is_array($collection_form_id) && count($collection_form_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $collection_form_id when calling getCollectionForm'
            );
        }

        $resourcePath = '/shipping/v2/collectionForms/{collectionFormId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        // path params
        if ($collection_form_id !== null) {
            $resourcePath = str_replace(
                '{' . 'collectionFormId' . '}',
                ObjectSerializer::toPathValue($collection_form_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getCollectionFormHistory
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormHistoryRequest $body body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormHistoryResponse
     */
    public function getCollectionFormHistory($body, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->getCollectionFormHistoryWithHttpInfo($body, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation getCollectionFormHistoryWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormHistoryRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormHistoryResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCollectionFormHistoryWithHttpInfo($body, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormHistoryResponse';
        $request = $this->getCollectionFormHistoryRequest($body, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getCollectionFormHistoryAsync
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormHistoryRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCollectionFormHistoryAsync($body, $x_amzn_shipping_business_id = null)
    {
        return $this->getCollectionFormHistoryAsyncWithHttpInfo($body, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCollectionFormHistoryAsyncWithHttpInfo
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormHistoryRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCollectionFormHistoryAsyncWithHttpInfo($body, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormHistoryResponse';
        $request = $this->getCollectionFormHistoryRequest($body, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getCollectionFormHistory'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetCollectionFormHistoryRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCollectionFormHistoryRequest($body, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling getCollectionFormHistory'
            );
        }

        $resourcePath = '/shipping/v2/collectionForms/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    /**
     * Operation getRates
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetRatesRequest $body body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetRatesResponse
     */
    public function getRates($body, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->getRatesWithHttpInfo($body, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation getRatesWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetRatesRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetRatesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRatesWithHttpInfo($body, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetRatesResponse';
        $request = $this->getRatesRequest($body, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getRatesAsync
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetRatesRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRatesAsync($body, $x_amzn_shipping_business_id = null)
    {
        return $this->getRatesAsyncWithHttpInfo($body, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRatesAsyncWithHttpInfo
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetRatesRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRatesAsyncWithHttpInfo($body, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetRatesResponse';
        $request = $this->getRatesRequest($body, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getRates'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetRatesRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRatesRequest($body, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling getRates'
            );
        }

        $resourcePath = '/shipping/v2/shipments/rates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getShipmentDocuments
     *
     * @param  string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $package_client_reference_id The package client reference identifier originally provided in the request body parameter for the getRates operation. (required)
     * @param  string $format The file format of the document. Must be one of the supported formats returned by the getRates operation. (optional)
     * @param  float $dpi The resolution of the document (for example, 300 means 300 dots per inch). Must be one of the supported resolutions returned in the response to the getRates operation. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetShipmentDocumentsResponse
     */
    public function getShipmentDocuments($shipment_id, $package_client_reference_id, $format = null, $dpi = null, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->getShipmentDocumentsWithHttpInfo($shipment_id, $package_client_reference_id, $format, $dpi, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation getShipmentDocumentsWithHttpInfo
     *
     * @param  string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $package_client_reference_id The package client reference identifier originally provided in the request body parameter for the getRates operation. (required)
     * @param  string $format The file format of the document. Must be one of the supported formats returned by the getRates operation. (optional)
     * @param  float $dpi The resolution of the document (for example, 300 means 300 dots per inch). Must be one of the supported resolutions returned in the response to the getRates operation. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetShipmentDocumentsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getShipmentDocumentsWithHttpInfo($shipment_id, $package_client_reference_id, $format = null, $dpi = null, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetShipmentDocumentsResponse';
        $request = $this->getShipmentDocumentsRequest($shipment_id, $package_client_reference_id, $format, $dpi, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getShipmentDocumentsAsync
     *
     *
     *
     * @param  string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $package_client_reference_id The package client reference identifier originally provided in the request body parameter for the getRates operation. (required)
     * @param  string $format The file format of the document. Must be one of the supported formats returned by the getRates operation. (optional)
     * @param  float $dpi The resolution of the document (for example, 300 means 300 dots per inch). Must be one of the supported resolutions returned in the response to the getRates operation. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShipmentDocumentsAsync($shipment_id, $package_client_reference_id, $format = null, $dpi = null, $x_amzn_shipping_business_id = null)
    {
        return $this->getShipmentDocumentsAsyncWithHttpInfo($shipment_id, $package_client_reference_id, $format, $dpi, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getShipmentDocumentsAsyncWithHttpInfo
     *
     *
     *
     * @param  string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $package_client_reference_id The package client reference identifier originally provided in the request body parameter for the getRates operation. (required)
     * @param  string $format The file format of the document. Must be one of the supported formats returned by the getRates operation. (optional)
     * @param  float $dpi The resolution of the document (for example, 300 means 300 dots per inch). Must be one of the supported resolutions returned in the response to the getRates operation. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShipmentDocumentsAsyncWithHttpInfo($shipment_id, $package_client_reference_id, $format = null, $dpi = null, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetShipmentDocumentsResponse';
        $request = $this->getShipmentDocumentsRequest($shipment_id, $package_client_reference_id, $format, $dpi, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getShipmentDocuments'
     *
     * @param  string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $package_client_reference_id The package client reference identifier originally provided in the request body parameter for the getRates operation. (required)
     * @param  string $format The file format of the document. Must be one of the supported formats returned by the getRates operation. (optional)
     * @param  float $dpi The resolution of the document (for example, 300 means 300 dots per inch). Must be one of the supported resolutions returned in the response to the getRates operation. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getShipmentDocumentsRequest($shipment_id, $package_client_reference_id, $format = null, $dpi = null, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'shipment_id' is set
        if ($shipment_id === null || (is_array($shipment_id) && count($shipment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shipment_id when calling getShipmentDocuments'
            );
        }
        // verify the required parameter 'package_client_reference_id' is set
        if ($package_client_reference_id === null || (is_array($package_client_reference_id) && count($package_client_reference_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $package_client_reference_id when calling getShipmentDocuments'
            );
        }

        $resourcePath = '/shipping/v2/shipments/{shipmentId}/documents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($package_client_reference_id !== null) {
            $queryParams['packageClientReferenceId'] = ObjectSerializer::toQueryValue($package_client_reference_id, null);
        }
        // query params
        if ($format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($format, null);
        }
        // query params
        if ($dpi !== null) {
            $queryParams['dpi'] = ObjectSerializer::toQueryValue($dpi, null);
        }
        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        // path params
        if ($shipment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'shipmentId' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getTracking
     *
     * @param  string $tracking_id A carrier-generated tracking identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $carrier_id A carrier identifier originally returned by the getRates operation for the selected rate. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetTrackingResponse
     */
    public function getTracking($tracking_id, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->getTrackingWithHttpInfo($tracking_id, $carrier_id, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation getTrackingWithHttpInfo
     *
     * @param  string $tracking_id A carrier-generated tracking identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $carrier_id A carrier identifier originally returned by the getRates operation for the selected rate. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetTrackingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrackingWithHttpInfo($tracking_id, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetTrackingResponse';
        $request = $this->getTrackingRequest($tracking_id, $carrier_id, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getTrackingAsync
     *
     *
     *
     * @param  string $tracking_id A carrier-generated tracking identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $carrier_id A carrier identifier originally returned by the getRates operation for the selected rate. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrackingAsync($tracking_id, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        return $this->getTrackingAsyncWithHttpInfo($tracking_id, $carrier_id, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrackingAsyncWithHttpInfo
     *
     *
     *
     * @param  string $tracking_id A carrier-generated tracking identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $carrier_id A carrier identifier originally returned by the getRates operation for the selected rate. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrackingAsyncWithHttpInfo($tracking_id, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetTrackingResponse';
        $request = $this->getTrackingRequest($tracking_id, $carrier_id, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getTracking'
     *
     * @param  string $tracking_id A carrier-generated tracking identifier originally returned by the purchaseShipment operation. (required)
     * @param  string $carrier_id A carrier identifier originally returned by the getRates operation for the selected rate. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTrackingRequest($tracking_id, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'tracking_id' is set
        if ($tracking_id === null || (is_array($tracking_id) && count($tracking_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tracking_id when calling getTracking'
            );
        }
        // verify the required parameter 'carrier_id' is set
        if ($carrier_id === null || (is_array($carrier_id) && count($carrier_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $carrier_id when calling getTracking'
            );
        }

        $resourcePath = '/shipping/v2/tracking';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($tracking_id !== null) {
            $queryParams['trackingId'] = ObjectSerializer::toQueryValue($tracking_id, null);
        }
        // query params
        if ($carrier_id !== null) {
            $queryParams['carrierId'] = ObjectSerializer::toQueryValue($carrier_id, null);
        }
        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getUnmanifestedShipments
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetUnmanifestedShipmentsRequest $body body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetUnmanifestedShipmentsResponse
     */
    public function getUnmanifestedShipments($body, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->getUnmanifestedShipmentsWithHttpInfo($body, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation getUnmanifestedShipmentsWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetUnmanifestedShipmentsRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetUnmanifestedShipmentsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUnmanifestedShipmentsWithHttpInfo($body, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetUnmanifestedShipmentsResponse';
        $request = $this->getUnmanifestedShipmentsRequest($body, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getUnmanifestedShipmentsAsync
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetUnmanifestedShipmentsRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUnmanifestedShipmentsAsync($body, $x_amzn_shipping_business_id = null)
    {
        return $this->getUnmanifestedShipmentsAsyncWithHttpInfo($body, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUnmanifestedShipmentsAsyncWithHttpInfo
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetUnmanifestedShipmentsRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUnmanifestedShipmentsAsyncWithHttpInfo($body, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetUnmanifestedShipmentsResponse';
        $request = $this->getUnmanifestedShipmentsRequest($body, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getUnmanifestedShipments'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GetUnmanifestedShipmentsRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getUnmanifestedShipmentsRequest($body, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling getUnmanifestedShipments'
            );
        }

        $resourcePath = '/shipping/v2/unmanifestedShipments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    /**
     * Operation linkCarrierAccount
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\LinkCarrierAccountRequest $body body (required)
     * @param  string $carrier_id The unique identifier associated with the carrier account. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\LinkCarrierAccountResponse
     */
    public function linkCarrierAccount($body, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->linkCarrierAccountWithHttpInfo($body, $carrier_id, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation linkCarrierAccountWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\LinkCarrierAccountRequest $body (required)
     * @param  string $carrier_id The unique identifier associated with the carrier account. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\LinkCarrierAccountResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function linkCarrierAccountWithHttpInfo($body, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\LinkCarrierAccountResponse';
        $request = $this->linkCarrierAccountRequest($body, $carrier_id, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation linkCarrierAccountAsync
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\LinkCarrierAccountRequest $body (required)
     * @param  string $carrier_id The unique identifier associated with the carrier account. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function linkCarrierAccountAsync($body, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        return $this->linkCarrierAccountAsyncWithHttpInfo($body, $carrier_id, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation linkCarrierAccountAsyncWithHttpInfo
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\LinkCarrierAccountRequest $body (required)
     * @param  string $carrier_id The unique identifier associated with the carrier account. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function linkCarrierAccountAsyncWithHttpInfo($body, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\LinkCarrierAccountResponse';
        $request = $this->linkCarrierAccountRequest($body, $carrier_id, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'linkCarrierAccount'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\LinkCarrierAccountRequest $body (required)
     * @param  string $carrier_id The unique identifier associated with the carrier account. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function linkCarrierAccountRequest($body, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling linkCarrierAccount'
            );
        }
        // verify the required parameter 'carrier_id' is set
        if ($carrier_id === null || (is_array($carrier_id) && count($carrier_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $carrier_id when calling linkCarrierAccount'
            );
        }

        $resourcePath = '/shipping/v2/carrierAccounts/{carrierId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        // path params
        if ($carrier_id !== null) {
            $resourcePath = str_replace(
                '{' . 'carrierId' . '}',
                ObjectSerializer::toPathValue($carrier_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    /**
     * Operation oneClickShipment
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\OneClickShipmentRequest $body body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\OneClickShipmentResponse
     */
    public function oneClickShipment($body, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->oneClickShipmentWithHttpInfo($body, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation oneClickShipmentWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\OneClickShipmentRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\OneClickShipmentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function oneClickShipmentWithHttpInfo($body, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\OneClickShipmentResponse';
        $request = $this->oneClickShipmentRequest($body, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation oneClickShipmentAsync
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\OneClickShipmentRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oneClickShipmentAsync($body, $x_amzn_shipping_business_id = null)
    {
        return $this->oneClickShipmentAsyncWithHttpInfo($body, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation oneClickShipmentAsyncWithHttpInfo
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\OneClickShipmentRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oneClickShipmentAsyncWithHttpInfo($body, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\OneClickShipmentResponse';
        $request = $this->oneClickShipmentRequest($body, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'oneClickShipment'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\OneClickShipmentRequest $body (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function oneClickShipmentRequest($body, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling oneClickShipment'
            );
        }

        $resourcePath = '/shipping/v2/oneClickShipment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation purchaseShipment
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentRequest $body body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentResponse
     */
    public function purchaseShipment($body, $x_amzn_idempotency_key = null, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->purchaseShipmentWithHttpInfo($body, $x_amzn_idempotency_key, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation purchaseShipmentWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function purchaseShipmentWithHttpInfo($body, $x_amzn_idempotency_key = null, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentResponse';
        $request = $this->purchaseShipmentRequest($body, $x_amzn_idempotency_key, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation purchaseShipmentAsync
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function purchaseShipmentAsync($body, $x_amzn_idempotency_key = null, $x_amzn_shipping_business_id = null)
    {
        return $this->purchaseShipmentAsyncWithHttpInfo($body, $x_amzn_idempotency_key, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation purchaseShipmentAsyncWithHttpInfo
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function purchaseShipmentAsyncWithHttpInfo($body, $x_amzn_idempotency_key = null, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentResponse';
        $request = $this->purchaseShipmentRequest($body, $x_amzn_idempotency_key, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'purchaseShipment'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentRequest $body (required)
     * @param  string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function purchaseShipmentRequest($body, $x_amzn_idempotency_key = null, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling purchaseShipment'
            );
        }

        $resourcePath = '/shipping/v2/shipments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_idempotency_key !== null) {
            $headerParams['x-amzn-IdempotencyKey'] = ObjectSerializer::toHeaderValue($x_amzn_idempotency_key);
        }
        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation unlinkCarrierAccount
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\UnlinkCarrierAccountRequest $body body (required)
     * @param  string $carrier_id carrier Id to unlink with merchant. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\UnlinkCarrierAccountResponse
     */
    public function unlinkCarrierAccount($body, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        list($response) = $this->unlinkCarrierAccountWithHttpInfo($body, $carrier_id, $x_amzn_shipping_business_id);
        return $response;
    }

    /**
     * Operation unlinkCarrierAccountWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\UnlinkCarrierAccountRequest $body (required)
     * @param  string $carrier_id carrier Id to unlink with merchant. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Shipping\UnlinkCarrierAccountResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function unlinkCarrierAccountWithHttpInfo($body, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\UnlinkCarrierAccountResponse';
        $request = $this->unlinkCarrierAccountRequest($body, $carrier_id, $x_amzn_shipping_business_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation unlinkCarrierAccountAsync
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\UnlinkCarrierAccountRequest $body (required)
     * @param  string $carrier_id carrier Id to unlink with merchant. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unlinkCarrierAccountAsync($body, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        return $this->unlinkCarrierAccountAsyncWithHttpInfo($body, $carrier_id, $x_amzn_shipping_business_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation unlinkCarrierAccountAsyncWithHttpInfo
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\UnlinkCarrierAccountRequest $body (required)
     * @param  string $carrier_id carrier Id to unlink with merchant. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unlinkCarrierAccountAsyncWithHttpInfo($body, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\UnlinkCarrierAccountResponse';
        $request = $this->unlinkCarrierAccountRequest($body, $carrier_id, $x_amzn_shipping_business_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'unlinkCarrierAccount'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Shipping\UnlinkCarrierAccountRequest $body (required)
     * @param  string $carrier_id carrier Id to unlink with merchant. (required)
     * @param  string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function unlinkCarrierAccountRequest($body, $carrier_id, $x_amzn_shipping_business_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling unlinkCarrierAccount'
            );
        }
        // verify the required parameter 'carrier_id' is set
        if ($carrier_id === null || (is_array($carrier_id) && count($carrier_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $carrier_id when calling unlinkCarrierAccount'
            );
        }

        $resourcePath = '/shipping/v2/carrierAccounts/{carrierId}/unlink';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amzn_shipping_business_id !== null) {
            $headerParams['x-amzn-shipping-business-id'] = ObjectSerializer::toHeaderValue($x_amzn_shipping_business_id);
        }

        // path params
        if ($carrier_id !== null) {
            $resourcePath = str_replace(
                '{' . 'carrierId' . '}',
                ObjectSerializer::toPathValue($carrier_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }
}
