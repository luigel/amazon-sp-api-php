<?php

/**
 * The Selling Partner API for Amazon Warehousing and Distribution
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD) provides programmatic access to information about AWD shipments and inventory.
 *
 * OpenAPI spec version: 2024-05-09
 */

namespace Luigel\AmazonSellingPartnerAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Luigel\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use Luigel\AmazonSellingPartnerAPI\Configuration;
use Luigel\AmazonSellingPartnerAPI\HeaderSelector;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

class AwdApi
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
     * Operation cancelInbound
     *
     * @param  string $order_id ID for the inbound order to be cancelled (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function cancelInbound($order_id)
    {
        $this->cancelInboundWithHttpInfo($order_id);
    }

    /**
     * Operation cancelInboundWithHttpInfo
     *
     * @param  string $order_id ID for the inbound order to be cancelled (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelInboundWithHttpInfo($order_id)
    {
        $returnType = '';
        $request = $this->cancelInboundRequest($order_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation cancelInboundAsync
     *
     *
     *
     * @param  string $order_id ID for the inbound order to be cancelled (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelInboundAsync($order_id)
    {
        return $this->cancelInboundAsyncWithHttpInfo($order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelInboundAsyncWithHttpInfo
     *
     *
     *
     * @param  string $order_id ID for the inbound order to be cancelled (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelInboundAsyncWithHttpInfo($order_id)
    {
        $returnType = '';
        $request = $this->cancelInboundRequest($order_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'cancelInbound'
     *
     * @param  string $order_id ID for the inbound order to be cancelled (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function cancelInboundRequest($order_id)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling cancelInbound'
            );
        }

        $resourcePath = '/awd/2024-05-09/inboundOrders/{orderId}/cancellation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation checkInboundEligibility
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundPackages $body Represents the packages you want to inbound. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundEligibility
     */
    public function checkInboundEligibility($body)
    {
        list($response) = $this->checkInboundEligibilityWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation checkInboundEligibilityWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundPackages $body Represents the packages you want to inbound. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundEligibility, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkInboundEligibilityWithHttpInfo($body)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundEligibility';
        $request = $this->checkInboundEligibilityRequest($body);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation checkInboundEligibilityAsync
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundPackages $body Represents the packages you want to inbound. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkInboundEligibilityAsync($body)
    {
        return $this->checkInboundEligibilityAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkInboundEligibilityAsyncWithHttpInfo
     *
     *
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundPackages $body Represents the packages you want to inbound. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkInboundEligibilityAsyncWithHttpInfo($body)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundEligibility';
        $request = $this->checkInboundEligibilityRequest($body);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'checkInboundEligibility'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundPackages $body Represents the packages you want to inbound. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function checkInboundEligibilityRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling checkInboundEligibility'
            );
        }

        $resourcePath = '/awd/2024-05-09/inboundEligibility';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation confirmInbound
     *
     * @param  string $order_id ID for the inbound order you want to confirm. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function confirmInbound($order_id)
    {
        $this->confirmInboundWithHttpInfo($order_id);
    }

    /**
     * Operation confirmInboundWithHttpInfo
     *
     * @param  string $order_id ID for the inbound order you want to confirm. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function confirmInboundWithHttpInfo($order_id)
    {
        $returnType = '';
        $request = $this->confirmInboundRequest($order_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation confirmInboundAsync
     *
     *
     *
     * @param  string $order_id ID for the inbound order you want to confirm. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function confirmInboundAsync($order_id)
    {
        return $this->confirmInboundAsyncWithHttpInfo($order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation confirmInboundAsyncWithHttpInfo
     *
     *
     *
     * @param  string $order_id ID for the inbound order you want to confirm. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function confirmInboundAsyncWithHttpInfo($order_id)
    {
        $returnType = '';
        $request = $this->confirmInboundRequest($order_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'confirmInbound'
     *
     * @param  string $order_id ID for the inbound order you want to confirm. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function confirmInboundRequest($order_id)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling confirmInbound'
            );
        }

        $resourcePath = '/awd/2024-05-09/inboundOrders/{orderId}/confirmation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation confirmOutbound
     *
     * @param  string $order_id ID for the outbound order you want to confirm. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function confirmOutbound($order_id)
    {
        $this->confirmOutboundWithHttpInfo($order_id);
    }

    /**
     * Operation confirmOutboundWithHttpInfo
     *
     * @param  string $order_id ID for the outbound order you want to confirm. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function confirmOutboundWithHttpInfo($order_id)
    {
        $returnType = '';
        $request = $this->confirmOutboundRequest($order_id);

        $this->sendRequest($request, $returnType);
    }

    /**
     * Operation confirmOutboundAsync
     *
     *
     *
     * @param  string $order_id ID for the outbound order you want to confirm. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function confirmOutboundAsync($order_id)
    {
        return $this->confirmOutboundAsyncWithHttpInfo($order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation confirmOutboundAsyncWithHttpInfo
     *
     *
     *
     * @param  string $order_id ID for the outbound order you want to confirm. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function confirmOutboundAsyncWithHttpInfo($order_id)
    {
        $returnType = '';
        $request = $this->confirmOutboundRequest($order_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'confirmOutbound'
     *
     * @param  string $order_id ID for the outbound order you want to confirm. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function confirmOutboundRequest($order_id)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling confirmOutbound'
            );
        }

        $resourcePath = '/awd/2024-05-09/outboundOrders/{orderId}/confirmation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation createInbound
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderCreationData $body Payload for creating an inbound order. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderReference
     */
    public function createInbound($body)
    {
        list($response) = $this->createInboundWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createInboundWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderCreationData $body Payload for creating an inbound order. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderReference, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInboundWithHttpInfo($body)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderReference';
        $request = $this->createInboundRequest($body);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation createInboundAsync
     *
     * 
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderCreationData $body Payload for creating an inbound order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInboundAsync($body)
    {
        return $this->createInboundAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createInboundAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderCreationData $body Payload for creating an inbound order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInboundAsyncWithHttpInfo($body)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderReference';
        $request = $this->createInboundRequest($body);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'createInbound'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderCreationData $body Payload for creating an inbound order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createInboundRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createInbound'
            );
        }

        $resourcePath = '/awd/2024-05-09/inboundOrders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation createOutbound
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderCreationData $body Payload for creating an outbound order. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderReference
     */
    public function createOutbound($body)
    {
        list($response) = $this->createOutboundWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createOutboundWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderCreationData $body Payload for creating an outbound order. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderReference, HTTP status code, HTTP response headers (array of strings)
     */
    public function createOutboundWithHttpInfo($body)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderReference';
        $request = $this->createOutboundRequest($body);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation createOutboundAsync
     *
     * 
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderCreationData $body Payload for creating an outbound order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOutboundAsync($body)
    {
        return $this->createOutboundAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createOutboundAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderCreationData $body Payload for creating an outbound order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOutboundAsyncWithHttpInfo($body)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderReference';
        $request = $this->createOutboundRequest($body);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'createOutbound'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderCreationData $body Payload for creating an outbound order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createOutboundRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createOutbound'
            );
        }

        $resourcePath = '/awd/2024-05-09/outboundOrders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getInbound
     *
     * @param  string $order_id ID for the inbound order to be retrieved. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrder
     */
    public function getInbound($order_id)
    {
        list($response) = $this->getInboundWithHttpInfo($order_id);
        return $response;
    }

    /**
     * Operation getInboundWithHttpInfo
     *
     * @param  string $order_id ID for the inbound order to be retrieved. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrder, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInboundWithHttpInfo($order_id)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrder';
        $request = $this->getInboundRequest($order_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getInboundAsync
     *
     * 
     *
     * @param  string $order_id ID for the inbound order to be retrieved. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInboundAsync($order_id)
    {
        return $this->getInboundAsyncWithHttpInfo($order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInboundAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $order_id ID for the inbound order to be retrieved. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInboundAsyncWithHttpInfo($order_id)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrder';
        $request = $this->getInboundRequest($order_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getInbound'
     *
     * @param  string $order_id ID for the inbound order to be retrieved. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getInboundRequest($order_id)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling getInbound'
            );
        }

        $resourcePath = '/awd/2024-05-09/inboundOrders/{orderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getInboundShipment
     *
     * @param  string $shipment_id ID for the shipment. A shipment contains the cases being inbounded. (required)
     * @param  string $sku_quantities If equal to &#x60;SHOW&#x60;, the response includes the shipment SKU quantity details.  Defaults to &#x60;HIDE&#x60;, in which case the response does not contain SKU quantities (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundShipment
     */
    public function getInboundShipment($shipment_id, $sku_quantities = null)
    {
        list($response) = $this->getInboundShipmentWithHttpInfo($shipment_id, $sku_quantities);
        return $response;
    }

    /**
     * Operation getInboundShipmentWithHttpInfo
     *
     * @param  string $shipment_id ID for the shipment. A shipment contains the cases being inbounded. (required)
     * @param  string $sku_quantities If equal to &#x60;SHOW&#x60;, the response includes the shipment SKU quantity details.  Defaults to &#x60;HIDE&#x60;, in which case the response does not contain SKU quantities (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundShipment, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInboundShipmentWithHttpInfo($shipment_id, $sku_quantities = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundShipment';
        $request = $this->getInboundShipmentRequest($shipment_id, $sku_quantities);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getInboundShipmentAsync
     *
     * 
     *
     * @param  string $shipment_id ID for the shipment. A shipment contains the cases being inbounded. (required)
     * @param  string $sku_quantities If equal to &#x60;SHOW&#x60;, the response includes the shipment SKU quantity details.  Defaults to &#x60;HIDE&#x60;, in which case the response does not contain SKU quantities (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInboundShipmentAsync($shipment_id, $sku_quantities = null)
    {
        return $this->getInboundShipmentAsyncWithHttpInfo($shipment_id, $sku_quantities)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInboundShipmentAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $shipment_id ID for the shipment. A shipment contains the cases being inbounded. (required)
     * @param  string $sku_quantities If equal to &#x60;SHOW&#x60;, the response includes the shipment SKU quantity details.  Defaults to &#x60;HIDE&#x60;, in which case the response does not contain SKU quantities (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInboundShipmentAsyncWithHttpInfo($shipment_id, $sku_quantities = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundShipment';
        $request = $this->getInboundShipmentRequest($shipment_id, $sku_quantities);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getInboundShipment'
     *
     * @param  string $shipment_id ID for the shipment. A shipment contains the cases being inbounded. (required)
     * @param  string $sku_quantities If equal to &#x60;SHOW&#x60;, the response includes the shipment SKU quantity details.  Defaults to &#x60;HIDE&#x60;, in which case the response does not contain SKU quantities (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getInboundShipmentRequest($shipment_id, $sku_quantities = null)
    {
        // verify the required parameter 'shipment_id' is set
        if ($shipment_id === null || (is_array($shipment_id) && count($shipment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shipment_id when calling getInboundShipment'
            );
        }

        $resourcePath = '/awd/2024-05-09/inboundShipments/{shipmentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($sku_quantities !== null) {
            $queryParams['skuQuantities'] = ObjectSerializer::toQueryValue($sku_quantities, null);
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
     * Operation getInboundShipmentLabels
     *
     * @param  string $shipment_id ID for the shipment. (required)
     * @param  string $page_type Page type for the generated labels. The default is &#x60;PLAIN_PAPER&#x60;. (optional)
     * @param  string $format_type The format type of the output file that contains your labels. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\ShipmentLabels
     */
    public function getInboundShipmentLabels($shipment_id, $page_type = null, $format_type = null)
    {
        list($response) = $this->getInboundShipmentLabelsWithHttpInfo($shipment_id, $page_type, $format_type);
        return $response;
    }

    /**
     * Operation getInboundShipmentLabelsWithHttpInfo
     *
     * @param  string $shipment_id ID for the shipment. (required)
     * @param  string $page_type Page type for the generated labels. The default is &#x60;PLAIN_PAPER&#x60;. (optional)
     * @param  string $format_type The format type of the output file that contains your labels. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\ShipmentLabels, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInboundShipmentLabelsWithHttpInfo($shipment_id, $page_type = null, $format_type = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\ShipmentLabels';
        $request = $this->getInboundShipmentLabelsRequest($shipment_id, $page_type, $format_type);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getInboundShipmentLabelsAsync
     *
     * 
     *
     * @param  string $shipment_id ID for the shipment. (required)
     * @param  string $page_type Page type for the generated labels. The default is &#x60;PLAIN_PAPER&#x60;. (optional)
     * @param  string $format_type The format type of the output file that contains your labels. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInboundShipmentLabelsAsync($shipment_id, $page_type = null, $format_type = null)
    {
        return $this->getInboundShipmentLabelsAsyncWithHttpInfo($shipment_id, $page_type, $format_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInboundShipmentLabelsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $shipment_id ID for the shipment. (required)
     * @param  string $page_type Page type for the generated labels. The default is &#x60;PLAIN_PAPER&#x60;. (optional)
     * @param  string $format_type The format type of the output file that contains your labels. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInboundShipmentLabelsAsyncWithHttpInfo($shipment_id, $page_type = null, $format_type = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\ShipmentLabels';
        $request = $this->getInboundShipmentLabelsRequest($shipment_id, $page_type, $format_type);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getInboundShipmentLabels'
     *
     * @param  string $shipment_id ID for the shipment. (required)
     * @param  string $page_type Page type for the generated labels. The default is &#x60;PLAIN_PAPER&#x60;. (optional)
     * @param  string $format_type The format type of the output file that contains your labels. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getInboundShipmentLabelsRequest($shipment_id, $page_type = null, $format_type = null)
    {
        // verify the required parameter 'shipment_id' is set
        if ($shipment_id === null || (is_array($shipment_id) && count($shipment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shipment_id when calling getInboundShipmentLabels'
            );
        }

        $resourcePath = '/awd/2024-05-09/inboundShipments/{shipmentId}/labels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page_type !== null) {
            $queryParams['pageType'] = ObjectSerializer::toQueryValue($page_type, null);
        }
        // query params
        if ($format_type !== null) {
            $queryParams['formatType'] = ObjectSerializer::toQueryValue($format_type, null);
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
     * Operation getOutbound
     *
     * @param  string $order_id ID for the outbound order to be retrieved. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrder
     */
    public function getOutbound($order_id)
    {
        list($response) = $this->getOutboundWithHttpInfo($order_id);
        return $response;
    }

    /**
     * Operation getOutboundWithHttpInfo
     *
     * @param  string $order_id ID for the outbound order to be retrieved. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrder, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOutboundWithHttpInfo($order_id)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrder';
        $request = $this->getOutboundRequest($order_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation getOutboundAsync
     *
     * 
     *
     * @param  string $order_id ID for the outbound order to be retrieved. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutboundAsync($order_id)
    {
        return $this->getOutboundAsyncWithHttpInfo($order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOutboundAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $order_id ID for the outbound order to be retrieved. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutboundAsyncWithHttpInfo($order_id)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrder';
        $request = $this->getOutboundRequest($order_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'getOutbound'
     *
     * @param  string $order_id ID for the outbound order to be retrieved. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOutboundRequest($order_id)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling getOutbound'
            );
        }

        $resourcePath = '/awd/2024-05-09/outboundOrders/{orderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listInboundShipments
     *
     * @param  string $sort_by Field to sort results by. By default, the response will be sorted by UPDATED_AT. (optional)
     * @param  string $sort_order Sort the response in ASCENDING or DESCENDING order. By default, the response will be sorted in DESCENDING order. (optional)
     * @param  string $shipment_status Filter by inbound shipment status. (optional)
     * @param  \DateTime $updated_after List the inbound shipments that were updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  \DateTime $updated_before List the inbound shipments that were updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\ShipmentListing
     */
    public function listInboundShipments($sort_by = null, $sort_order = null, $shipment_status = null, $updated_after = null, $updated_before = null, $max_results = '25', $next_token = null)
    {
        list($response) = $this->listInboundShipmentsWithHttpInfo($sort_by, $sort_order, $shipment_status, $updated_after, $updated_before, $max_results, $next_token);
        return $response;
    }

    /**
     * Operation listInboundShipmentsWithHttpInfo
     *
     * @param  string $sort_by Field to sort results by. By default, the response will be sorted by UPDATED_AT. (optional)
     * @param  string $sort_order Sort the response in ASCENDING or DESCENDING order. By default, the response will be sorted in DESCENDING order. (optional)
     * @param  string $shipment_status Filter by inbound shipment status. (optional)
     * @param  \DateTime $updated_after List the inbound shipments that were updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  \DateTime $updated_before List the inbound shipments that were updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\ShipmentListing, HTTP status code, HTTP response headers (array of strings)
     */
    public function listInboundShipmentsWithHttpInfo($sort_by = null, $sort_order = null, $shipment_status = null, $updated_after = null, $updated_before = null, $max_results = '25', $next_token = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\ShipmentListing';
        $request = $this->listInboundShipmentsRequest($sort_by, $sort_order, $shipment_status, $updated_after, $updated_before, $max_results, $next_token);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation listInboundShipmentsAsync
     *
     * 
     *
     * @param  string $sort_by Field to sort results by. By default, the response will be sorted by UPDATED_AT. (optional)
     * @param  string $sort_order Sort the response in ASCENDING or DESCENDING order. By default, the response will be sorted in DESCENDING order. (optional)
     * @param  string $shipment_status Filter by inbound shipment status. (optional)
     * @param  \DateTime $updated_after List the inbound shipments that were updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  \DateTime $updated_before List the inbound shipments that were updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInboundShipmentsAsync($sort_by = null, $sort_order = null, $shipment_status = null, $updated_after = null, $updated_before = null, $max_results = '25', $next_token = null)
    {
        return $this->listInboundShipmentsAsyncWithHttpInfo($sort_by, $sort_order, $shipment_status, $updated_after, $updated_before, $max_results, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listInboundShipmentsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $sort_by Field to sort results by. By default, the response will be sorted by UPDATED_AT. (optional)
     * @param  string $sort_order Sort the response in ASCENDING or DESCENDING order. By default, the response will be sorted in DESCENDING order. (optional)
     * @param  string $shipment_status Filter by inbound shipment status. (optional)
     * @param  \DateTime $updated_after List the inbound shipments that were updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  \DateTime $updated_before List the inbound shipments that were updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInboundShipmentsAsyncWithHttpInfo($sort_by = null, $sort_order = null, $shipment_status = null, $updated_after = null, $updated_before = null, $max_results = '25', $next_token = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\ShipmentListing';
        $request = $this->listInboundShipmentsRequest($sort_by, $sort_order, $shipment_status, $updated_after, $updated_before, $max_results, $next_token);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'listInboundShipments'
     *
     * @param  string $sort_by Field to sort results by. By default, the response will be sorted by UPDATED_AT. (optional)
     * @param  string $sort_order Sort the response in ASCENDING or DESCENDING order. By default, the response will be sorted in DESCENDING order. (optional)
     * @param  string $shipment_status Filter by inbound shipment status. (optional)
     * @param  \DateTime $updated_after List the inbound shipments that were updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  \DateTime $updated_before List the inbound shipments that were updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listInboundShipmentsRequest($sort_by = null, $sort_order = null, $shipment_status = null, $updated_after = null, $updated_before = null, $max_results = '25', $next_token = null)
    {

        $resourcePath = '/awd/2024-05-09/inboundShipments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($sort_by !== null) {
            $queryParams['sortBy'] = ObjectSerializer::toQueryValue($sort_by, null);
        }
        // query params
        if ($sort_order !== null) {
            $queryParams['sortOrder'] = ObjectSerializer::toQueryValue($sort_order, null);
        }
        // query params
        if ($shipment_status !== null) {
            $queryParams['shipmentStatus'] = ObjectSerializer::toQueryValue($shipment_status, null);
        }
        // query params
        if ($updated_after !== null) {
            $queryParams['updatedAfter'] = ObjectSerializer::toQueryValue($updated_after, 'date-time');
        }
        // query params
        if ($updated_before !== null) {
            $queryParams['updatedBefore'] = ObjectSerializer::toQueryValue($updated_before, 'date-time');
        }
        // query params
        if ($max_results !== null) {
            $queryParams['maxResults'] = ObjectSerializer::toQueryValue($max_results, 'int32');
        }
        // query params
        if ($next_token !== null) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($next_token, null);
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listInventory
     *
     * @param  string $sku Filter by seller or merchant SKU for the item. (optional)
     * @param  string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param  string $details Set to &#x60;SHOW&#x60; to return summaries with additional inventory details. Defaults to &#x60;HIDE,&#x60; which returns only inventory summary totals. (optional)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\InventoryListing
     */
    public function listInventory($sku = null, $sort_order = null, $details = null, $next_token = null, $max_results = '25')
    {
        list($response) = $this->listInventoryWithHttpInfo($sku, $sort_order, $details, $next_token, $max_results);
        return $response;
    }

    /**
     * Operation listInventoryWithHttpInfo
     *
     * @param  string $sku Filter by seller or merchant SKU for the item. (optional)
     * @param  string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param  string $details Set to &#x60;SHOW&#x60; to return summaries with additional inventory details. Defaults to &#x60;HIDE,&#x60; which returns only inventory summary totals. (optional)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\InventoryListing, HTTP status code, HTTP response headers (array of strings)
     */
    public function listInventoryWithHttpInfo($sku = null, $sort_order = null, $details = null, $next_token = null, $max_results = '25')
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InventoryListing';
        $request = $this->listInventoryRequest($sku, $sort_order, $details, $next_token, $max_results);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation listInventoryAsync
     *
     * 
     *
     * @param  string $sku Filter by seller or merchant SKU for the item. (optional)
     * @param  string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param  string $details Set to &#x60;SHOW&#x60; to return summaries with additional inventory details. Defaults to &#x60;HIDE,&#x60; which returns only inventory summary totals. (optional)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInventoryAsync($sku = null, $sort_order = null, $details = null, $next_token = null, $max_results = '25')
    {
        return $this->listInventoryAsyncWithHttpInfo($sku, $sort_order, $details, $next_token, $max_results)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listInventoryAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $sku Filter by seller or merchant SKU for the item. (optional)
     * @param  string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param  string $details Set to &#x60;SHOW&#x60; to return summaries with additional inventory details. Defaults to &#x60;HIDE,&#x60; which returns only inventory summary totals. (optional)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInventoryAsyncWithHttpInfo($sku = null, $sort_order = null, $details = null, $next_token = null, $max_results = '25')
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InventoryListing';
        $request = $this->listInventoryRequest($sku, $sort_order, $details, $next_token, $max_results);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'listInventory'
     *
     * @param  string $sku Filter by seller or merchant SKU for the item. (optional)
     * @param  string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param  string $details Set to &#x60;SHOW&#x60; to return summaries with additional inventory details. Defaults to &#x60;HIDE,&#x60; which returns only inventory summary totals. (optional)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listInventoryRequest($sku = null, $sort_order = null, $details = null, $next_token = null, $max_results = '25')
    {

        $resourcePath = '/awd/2024-05-09/inventory';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($sku !== null) {
            $queryParams['sku'] = ObjectSerializer::toQueryValue($sku, null);
        }
        // query params
        if ($sort_order !== null) {
            $queryParams['sortOrder'] = ObjectSerializer::toQueryValue($sort_order, null);
        }
        // query params
        if ($details !== null) {
            $queryParams['details'] = ObjectSerializer::toQueryValue($details, null);
        }
        // query params
        if ($next_token !== null) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($next_token, null);
        }
        // query params
        if ($max_results !== null) {
            $queryParams['maxResults'] = ObjectSerializer::toQueryValue($max_results, 'int32');
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listOutbounds
     *
     * @param  \DateTime $updated_after Get the outbound orders updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  \DateTime $updated_before Get the outbound orders updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundListing
     */
    public function listOutbounds($updated_after = null, $updated_before = null, $sort_order = null, $max_results = '25', $next_token = null)
    {
        list($response) = $this->listOutboundsWithHttpInfo($updated_after, $updated_before, $sort_order, $max_results, $next_token);
        return $response;
    }

    /**
     * Operation listOutboundsWithHttpInfo
     *
     * @param  \DateTime $updated_after Get the outbound orders updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  \DateTime $updated_before Get the outbound orders updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundListing, HTTP status code, HTTP response headers (array of strings)
     */
    public function listOutboundsWithHttpInfo($updated_after = null, $updated_before = null, $sort_order = null, $max_results = '25', $next_token = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundListing';
        $request = $this->listOutboundsRequest($updated_after, $updated_before, $sort_order, $max_results, $next_token);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation listOutboundsAsync
     *
     * 
     *
     * @param  \DateTime $updated_after Get the outbound orders updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  \DateTime $updated_before Get the outbound orders updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listOutboundsAsync($updated_after = null, $updated_before = null, $sort_order = null, $max_results = '25', $next_token = null)
    {
        return $this->listOutboundsAsyncWithHttpInfo($updated_after, $updated_before, $sort_order, $max_results, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listOutboundsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \DateTime $updated_after Get the outbound orders updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  \DateTime $updated_before Get the outbound orders updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listOutboundsAsyncWithHttpInfo($updated_after = null, $updated_before = null, $sort_order = null, $max_results = '25', $next_token = null)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundListing';
        $request = $this->listOutboundsRequest($updated_after, $updated_before, $sort_order, $max_results, $next_token);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'listOutbounds'
     *
     * @param  \DateTime $updated_after Get the outbound orders updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  \DateTime $updated_before Get the outbound orders updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#x27;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#x27;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param  string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param  int $max_results Maximum number of results to return. (optional, default to 25)
     * @param  string $next_token Token to retrieve the next set of paginated results. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listOutboundsRequest($updated_after = null, $updated_before = null, $sort_order = null, $max_results = '25', $next_token = null)
    {

        $resourcePath = '/awd/2024-05-09/outboundOrders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($updated_after !== null) {
            $queryParams['updatedAfter'] = ObjectSerializer::toQueryValue($updated_after, 'date-time');
        }
        // query params
        if ($updated_before !== null) {
            $queryParams['updatedBefore'] = ObjectSerializer::toQueryValue($updated_before, 'date-time');
        }
        // query params
        if ($sort_order !== null) {
            $queryParams['sortOrder'] = ObjectSerializer::toQueryValue($sort_order, null);
        }
        // query params
        if ($max_results !== null) {
            $queryParams['maxResults'] = ObjectSerializer::toQueryValue($max_results, 'int32');
        }
        // query params
        if ($next_token !== null) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($next_token, null);
        }


        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation updateInbound
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrder $body Represents an AWD inbound order. (required)
     * @param  string $order_id ID for the inbound order to be updated. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderReference
     */
    public function updateInbound($body, $order_id)
    {
        list($response) = $this->updateInboundWithHttpInfo($body, $order_id);
        return $response;
    }

    /**
     * Operation updateInboundWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrder $body Represents an AWD inbound order. (required)
     * @param  string $order_id ID for the inbound order to be updated. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderReference, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateInboundWithHttpInfo($body, $order_id)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderReference';
        $request = $this->updateInboundRequest($body, $order_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation updateInboundAsync
     *
     * 
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrder $body Represents an AWD inbound order. (required)
     * @param  string $order_id ID for the inbound order to be updated. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInboundAsync($body, $order_id)
    {
        return $this->updateInboundAsyncWithHttpInfo($body, $order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateInboundAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrder $body Represents an AWD inbound order. (required)
     * @param  string $order_id ID for the inbound order to be updated. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInboundAsyncWithHttpInfo($body, $order_id)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrderReference';
        $request = $this->updateInboundRequest($body, $order_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'updateInbound'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundOrder $body Represents an AWD inbound order. (required)
     * @param  string $order_id ID for the inbound order to be updated. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateInboundRequest($body, $order_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateInbound'
            );
        }
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling updateInbound'
            );
        }

        $resourcePath = '/awd/2024-05-09/inboundOrders/{orderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    /**
     * Operation updateInboundShipmentTransportDetails
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\TransportationDetails $body Transportation details for the shipment. (required)
     * @param  string $shipment_id The shipment ID. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundShipment
     */
    public function updateInboundShipmentTransportDetails($body, $shipment_id)
    {
        list($response) = $this->updateInboundShipmentTransportDetailsWithHttpInfo($body, $shipment_id);
        return $response;
    }

    /**
     * Operation updateInboundShipmentTransportDetailsWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\TransportationDetails $body Transportation details for the shipment. (required)
     * @param  string $shipment_id The shipment ID. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundShipment, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateInboundShipmentTransportDetailsWithHttpInfo($body, $shipment_id)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundShipment';
        $request = $this->updateInboundShipmentTransportDetailsRequest($body, $shipment_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation updateInboundShipmentTransportDetailsAsync
     *
     * 
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\TransportationDetails $body Transportation details for the shipment. (required)
     * @param  string $shipment_id The shipment ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInboundShipmentTransportDetailsAsync($body, $shipment_id)
    {
        return $this->updateInboundShipmentTransportDetailsAsyncWithHttpInfo($body, $shipment_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateInboundShipmentTransportDetailsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\TransportationDetails $body Transportation details for the shipment. (required)
     * @param  string $shipment_id The shipment ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInboundShipmentTransportDetailsAsyncWithHttpInfo($body, $shipment_id)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundShipment';
        $request = $this->updateInboundShipmentTransportDetailsRequest($body, $shipment_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'updateInboundShipmentTransportDetails'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\TransportationDetails $body Transportation details for the shipment. (required)
     * @param  string $shipment_id The shipment ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateInboundShipmentTransportDetailsRequest($body, $shipment_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateInboundShipmentTransportDetails'
            );
        }
        // verify the required parameter 'shipment_id' is set
        if ($shipment_id === null || (is_array($shipment_id) && count($shipment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shipment_id when calling updateInboundShipmentTransportDetails'
            );
        }

        $resourcePath = '/awd/2024-05-09/inboundShipments/{shipmentId}/transport';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($shipment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'shipmentId' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    /**
     * Operation updateOutbound
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrder $body Represents an AWD outbound order. (required)
     * @param  string $order_id ID for the outbound order to be updated. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderReference
     */
    public function updateOutbound($body, $order_id)
    {
        list($response) = $this->updateOutboundWithHttpInfo($body, $order_id);
        return $response;
    }

    /**
     * Operation updateOutboundWithHttpInfo
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrder $body Represents an AWD outbound order. (required)
     * @param  string $order_id ID for the outbound order to be updated. (required)
     *
     * @throws \Luigel\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderReference, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateOutboundWithHttpInfo($body, $order_id)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderReference';
        $request = $this->updateOutboundRequest($body, $order_id);

        return $this->sendRequest($request, $returnType);
    }

    /**
     * Operation updateOutboundAsync
     *
     * 
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrder $body Represents an AWD outbound order. (required)
     * @param  string $order_id ID for the outbound order to be updated. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOutboundAsync($body, $order_id)
    {
        return $this->updateOutboundAsyncWithHttpInfo($body, $order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateOutboundAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrder $body Represents an AWD outbound order. (required)
     * @param  string $order_id ID for the outbound order to be updated. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOutboundAsyncWithHttpInfo($body, $order_id)
    {
        $returnType = '\Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrderReference';
        $request = $this->updateOutboundRequest($body, $order_id);

        return $this->sendRequestAsync($request, $returnType);
    }

    /**
     * Create request for operation 'updateOutbound'
     *
     * @param  \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundOrder $body Represents an AWD outbound order. (required)
     * @param  string $order_id ID for the outbound order to be updated. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateOutboundRequest($body, $order_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateOutbound'
            );
        }
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling updateOutbound'
            );
        }

        $resourcePath = '/awd/2024-05-09/outboundOrders/{orderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }
}
