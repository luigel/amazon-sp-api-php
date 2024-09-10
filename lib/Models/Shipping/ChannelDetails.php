<?php
/**
 * ChannelDetails
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
 * ChannelDetails Class Doc Comment
 *
 * @category Class
 * @description Shipment source channel related information.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChannelDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_type' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\ChannelType',
        'amazon_order_details' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\AmazonOrderDetails',
        'amazon_shipment_details' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\AmazonShipmentDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channel_type' => null,
        'amazon_order_details' => null,
        'amazon_shipment_details' => null
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
        'channel_type' => 'channelType',
        'amazon_order_details' => 'amazonOrderDetails',
        'amazon_shipment_details' => 'amazonShipmentDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_type' => 'setChannelType',
        'amazon_order_details' => 'setAmazonOrderDetails',
        'amazon_shipment_details' => 'setAmazonShipmentDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_type' => 'getChannelType',
        'amazon_order_details' => 'getAmazonOrderDetails',
        'amazon_shipment_details' => 'getAmazonShipmentDetails'
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
        $this->container['channel_type'] = isset($data['channel_type']) ? $data['channel_type'] : null;
        $this->container['amazon_order_details'] = isset($data['amazon_order_details']) ? $data['amazon_order_details'] : null;
        $this->container['amazon_shipment_details'] = isset($data['amazon_shipment_details']) ? $data['amazon_shipment_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['channel_type'] === null) {
            $invalidProperties[] = "'channel_type' can't be null";
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
     * Gets channel_type
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\ChannelType
     */
    public function getChannelType()
    {
        return $this->container['channel_type'];
    }

    /**
     * Sets channel_type
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\ChannelType $channel_type channel_type
     *
     * @return $this
     */
    public function setChannelType($channel_type)
    {
        $this->container['channel_type'] = $channel_type;

        return $this;
    }

    /**
     * Gets amazon_order_details
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\AmazonOrderDetails
     */
    public function getAmazonOrderDetails()
    {
        return $this->container['amazon_order_details'];
    }

    /**
     * Sets amazon_order_details
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\AmazonOrderDetails $amazon_order_details amazon_order_details
     *
     * @return $this
     */
    public function setAmazonOrderDetails($amazon_order_details)
    {
        $this->container['amazon_order_details'] = $amazon_order_details;

        return $this;
    }

    /**
     * Gets amazon_shipment_details
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\AmazonShipmentDetails
     */
    public function getAmazonShipmentDetails()
    {
        return $this->container['amazon_shipment_details'];
    }

    /**
     * Sets amazon_shipment_details
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\AmazonShipmentDetails $amazon_shipment_details amazon_shipment_details
     *
     * @return $this
     */
    public function setAmazonShipmentDetails($amazon_shipment_details)
    {
        $this->container['amazon_shipment_details'] = $amazon_shipment_details;

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