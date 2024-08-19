<?php
/**
 * OutboundOrderCreationData
 *
 * PHP version 5
 *
 * @category Class
 */

/**
 * The Selling Partner API for Amazon Warehousing and Distribution
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD) provides programmatic access to information about AWD shipments and inventory.
 *
 * OpenAPI spec version: 2024-05-09
 */

namespace Luigel\AmazonSellingPartnerAPI\Models\Awd;

use \ArrayAccess;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * OutboundOrderCreationData Class Doc Comment
 *
 * @category Class
 * @description Payload for creating an outbound order.
 */
class OutboundOrderCreationData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OutboundOrderCreationData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_preferences' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\OrderAttribute[]',
        'packages_to_outbound' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[]',
        'products_to_outbound' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\ProductQuantity[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_preferences' => null,
        'packages_to_outbound' => null,
        'products_to_outbound' => null
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
        'order_preferences' => 'orderPreferences',
        'packages_to_outbound' => 'packagesToOutbound',
        'products_to_outbound' => 'productsToOutbound'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_preferences' => 'setOrderPreferences',
        'packages_to_outbound' => 'setPackagesToOutbound',
        'products_to_outbound' => 'setProductsToOutbound'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_preferences' => 'getOrderPreferences',
        'packages_to_outbound' => 'getPackagesToOutbound',
        'products_to_outbound' => 'getProductsToOutbound'
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
        $this->container['order_preferences'] = isset($data['order_preferences']) ? $data['order_preferences'] : null;
        $this->container['packages_to_outbound'] = isset($data['packages_to_outbound']) ? $data['packages_to_outbound'] : null;
        $this->container['products_to_outbound'] = isset($data['products_to_outbound']) ? $data['products_to_outbound'] : null;
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
     * Gets order_preferences
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\OrderAttribute[]
     */
    public function getOrderPreferences()
    {
        return $this->container['order_preferences'];
    }

    /**
     * Sets order_preferences
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\OrderAttribute[] $order_preferences Order preferences for the outbound order.
     *
     * @return $this
     */
    public function setOrderPreferences($order_preferences)
    {
        $this->container['order_preferences'] = $order_preferences;

        return $this;
    }

    /**
     * Gets packages_to_outbound
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[]
     */
    public function getPackagesToOutbound()
    {
        return $this->container['packages_to_outbound'];
    }

    /**
     * Sets packages_to_outbound
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[] $packages_to_outbound List of packages to be outbound.
     *
     * @return $this
     */
    public function setPackagesToOutbound($packages_to_outbound)
    {
        $this->container['packages_to_outbound'] = $packages_to_outbound;

        return $this;
    }

    /**
     * Gets products_to_outbound
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\ProductQuantity[]
     */
    public function getProductsToOutbound()
    {
        return $this->container['products_to_outbound'];
    }

    /**
     * Sets products_to_outbound
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\ProductQuantity[] $products_to_outbound List of product units to be outbound.
     *
     * @return $this
     */
    public function setProductsToOutbound($products_to_outbound)
    {
        $this->container['products_to_outbound'] = $products_to_outbound;

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
