<?php
/**
 * OneClickShipmentResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * OpenAPI spec version: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.61
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Luigel\AmazonSellingPartnerAPI\Models\Shipping;

use \ArrayAccess;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * OneClickShipmentResult Class Doc Comment
 *
 * @category Class
 * @description The payload for the OneClickShipment API.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OneClickShipmentResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OneClickShipmentResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipment_id' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\ShipmentId',
        'package_document_details' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\PackageDocumentDetailList',
        'promise' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\Promise',
        'carrier' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\Carrier',
        'service' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\Service',
        'total_charge' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipment_id' => null,
        'package_document_details' => null,
        'promise' => null,
        'carrier' => null,
        'service' => null,
        'total_charge' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipment_id' => 'shipmentId',
        'package_document_details' => 'packageDocumentDetails',
        'promise' => 'promise',
        'carrier' => 'carrier',
        'service' => 'service',
        'total_charge' => 'totalCharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
        'package_document_details' => 'setPackageDocumentDetails',
        'promise' => 'setPromise',
        'carrier' => 'setCarrier',
        'service' => 'setService',
        'total_charge' => 'setTotalCharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
        'package_document_details' => 'getPackageDocumentDetails',
        'promise' => 'getPromise',
        'carrier' => 'getCarrier',
        'service' => 'getService',
        'total_charge' => 'getTotalCharge'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['package_document_details'] = isset($data['package_document_details']) ? $data['package_document_details'] : null;
        $this->container['promise'] = isset($data['promise']) ? $data['promise'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['total_charge'] = isset($data['total_charge']) ? $data['total_charge'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment_id'] === null) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if ($this->container['package_document_details'] === null) {
            $invalidProperties[] = "'package_document_details' can't be null";
        }
        if ($this->container['promise'] === null) {
            $invalidProperties[] = "'promise' can't be null";
        }
        if ($this->container['carrier'] === null) {
            $invalidProperties[] = "'carrier' can't be null";
        }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['total_charge'] === null) {
            $invalidProperties[] = "'total_charge' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets shipment_id
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\ShipmentId
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\ShipmentId $shipment_id shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets package_document_details
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PackageDocumentDetailList
     */
    public function getPackageDocumentDetails()
    {
        return $this->container['package_document_details'];
    }

    /**
     * Sets package_document_details
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PackageDocumentDetailList $package_document_details package_document_details
     *
     * @return $this
     */
    public function setPackageDocumentDetails($package_document_details)
    {
        $this->container['package_document_details'] = $package_document_details;

        return $this;
    }

    /**
     * Gets promise
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Promise
     */
    public function getPromise()
    {
        return $this->container['promise'];
    }

    /**
     * Sets promise
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Promise $promise promise
     *
     * @return $this
     */
    public function setPromise($promise)
    {
        $this->container['promise'] = $promise;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Carrier
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Carrier $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Service
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Service $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets total_charge
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Currency
     */
    public function getTotalCharge()
    {
        return $this->container['total_charge'];
    }

    /**
     * Sets total_charge
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Currency $total_charge total_charge
     *
     * @return $this
     */
    public function setTotalCharge($total_charge)
    {
        $this->container['total_charge'] = $total_charge;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
