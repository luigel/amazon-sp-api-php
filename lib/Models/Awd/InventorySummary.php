<?php
/**
 * InventorySummary
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
 * InventorySummary Class Doc Comment
 *
 * @category Class
 * @description Summary of inventory per SKU.
 */
class InventorySummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventorySummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inventory_details' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\InventoryDetails',
        'sku' => 'string',
        'total_inbound_quantity' => 'int',
        'total_onhand_quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inventory_details' => null,
        'sku' => null,
        'total_inbound_quantity' => 'int64',
        'total_onhand_quantity' => 'int64'
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
        'inventory_details' => 'inventoryDetails',
        'sku' => 'sku',
        'total_inbound_quantity' => 'totalInboundQuantity',
        'total_onhand_quantity' => 'totalOnhandQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory_details' => 'setInventoryDetails',
        'sku' => 'setSku',
        'total_inbound_quantity' => 'setTotalInboundQuantity',
        'total_onhand_quantity' => 'setTotalOnhandQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory_details' => 'getInventoryDetails',
        'sku' => 'getSku',
        'total_inbound_quantity' => 'getTotalInboundQuantity',
        'total_onhand_quantity' => 'getTotalOnhandQuantity'
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
        $this->container['inventory_details'] = isset($data['inventory_details']) ? $data['inventory_details'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['total_inbound_quantity'] = isset($data['total_inbound_quantity']) ? $data['total_inbound_quantity'] : null;
        $this->container['total_onhand_quantity'] = isset($data['total_onhand_quantity']) ? $data['total_onhand_quantity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
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
     * Gets inventory_details
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\InventoryDetails
     */
    public function getInventoryDetails()
    {
        return $this->container['inventory_details'];
    }

    /**
     * Sets inventory_details
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\InventoryDetails $inventory_details inventory_details
     *
     * @return $this
     */
    public function setInventoryDetails($inventory_details)
    {
        $this->container['inventory_details'] = $inventory_details;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku The seller or merchant SKU.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets total_inbound_quantity
     *
     * @return int
     */
    public function getTotalInboundQuantity()
    {
        return $this->container['total_inbound_quantity'];
    }

    /**
     * Sets total_inbound_quantity
     *
     * @param int $total_inbound_quantity Total quantity that is in-transit from the seller and has not yet been received at an AWD Distribution Center
     *
     * @return $this
     */
    public function setTotalInboundQuantity($total_inbound_quantity)
    {
        $this->container['total_inbound_quantity'] = $total_inbound_quantity;

        return $this;
    }

    /**
     * Gets total_onhand_quantity
     *
     * @return int
     */
    public function getTotalOnhandQuantity()
    {
        return $this->container['total_onhand_quantity'];
    }

    /**
     * Sets total_onhand_quantity
     *
     * @param int $total_onhand_quantity Total quantity that is present in AWD distribution centers.
     *
     * @return $this
     */
    public function setTotalOnhandQuantity($total_onhand_quantity)
    {
        $this->container['total_onhand_quantity'] = $total_onhand_quantity;

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
