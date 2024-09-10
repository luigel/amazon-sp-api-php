<?php
/**
 * RateItem
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
 * RateItem Class Doc Comment
 *
 * @category Class
 * @description Rate Item for shipping (base cost, transaction fee, confirmation, insurance, etc.) Data source definition:
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RateItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RateItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rate_item_id' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\RateItemID',
        'rate_item_type' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\RateItemType',
        'rate_item_charge' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\Currency',
        'rate_item_name_localization' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rate_item_id' => null,
        'rate_item_type' => null,
        'rate_item_charge' => null,
        'rate_item_name_localization' => null
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
        'rate_item_id' => 'rateItemID',
        'rate_item_type' => 'rateItemType',
        'rate_item_charge' => 'rateItemCharge',
        'rate_item_name_localization' => 'rateItemNameLocalization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rate_item_id' => 'setRateItemId',
        'rate_item_type' => 'setRateItemType',
        'rate_item_charge' => 'setRateItemCharge',
        'rate_item_name_localization' => 'setRateItemNameLocalization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rate_item_id' => 'getRateItemId',
        'rate_item_type' => 'getRateItemType',
        'rate_item_charge' => 'getRateItemCharge',
        'rate_item_name_localization' => 'getRateItemNameLocalization'
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
        $this->container['rate_item_id'] = isset($data['rate_item_id']) ? $data['rate_item_id'] : null;
        $this->container['rate_item_type'] = isset($data['rate_item_type']) ? $data['rate_item_type'] : null;
        $this->container['rate_item_charge'] = isset($data['rate_item_charge']) ? $data['rate_item_charge'] : null;
        $this->container['rate_item_name_localization'] = isset($data['rate_item_name_localization']) ? $data['rate_item_name_localization'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets rate_item_id
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\RateItemID
     */
    public function getRateItemId()
    {
        return $this->container['rate_item_id'];
    }

    /**
     * Sets rate_item_id
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\RateItemID $rate_item_id rate_item_id
     *
     * @return $this
     */
    public function setRateItemId($rate_item_id)
    {
        $this->container['rate_item_id'] = $rate_item_id;

        return $this;
    }

    /**
     * Gets rate_item_type
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\RateItemType
     */
    public function getRateItemType()
    {
        return $this->container['rate_item_type'];
    }

    /**
     * Sets rate_item_type
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\RateItemType $rate_item_type rate_item_type
     *
     * @return $this
     */
    public function setRateItemType($rate_item_type)
    {
        $this->container['rate_item_type'] = $rate_item_type;

        return $this;
    }

    /**
     * Gets rate_item_charge
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Currency
     */
    public function getRateItemCharge()
    {
        return $this->container['rate_item_charge'];
    }

    /**
     * Sets rate_item_charge
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Currency $rate_item_charge rate_item_charge
     *
     * @return $this
     */
    public function setRateItemCharge($rate_item_charge)
    {
        $this->container['rate_item_charge'] = $rate_item_charge;

        return $this;
    }

    /**
     * Gets rate_item_name_localization
     *
     * @return string
     */
    public function getRateItemNameLocalization()
    {
        return $this->container['rate_item_name_localization'];
    }

    /**
     * Sets rate_item_name_localization
     *
     * @param string $rate_item_name_localization Used for the localization.
     *
     * @return $this
     */
    public function setRateItemNameLocalization($rate_item_name_localization)
    {
        $this->container['rate_item_name_localization'] = $rate_item_name_localization;

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