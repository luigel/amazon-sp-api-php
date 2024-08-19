<?php
/**
 * SkuEligibility
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
 * SkuEligibility Class Doc Comment
 *
 * @category Class
 * @description Represents eligibility of one SKU.
 */
class SkuEligibility implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SkuEligibility';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ineligibility_reasons' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\SkuIneligibilityReason[]',
        'package_quantity' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity',
        'status' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\InboundEligibilityStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ineligibility_reasons' => null,
        'package_quantity' => null,
        'status' => null
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
        'ineligibility_reasons' => 'ineligibilityReasons',
        'package_quantity' => 'packageQuantity',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ineligibility_reasons' => 'setIneligibilityReasons',
        'package_quantity' => 'setPackageQuantity',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ineligibility_reasons' => 'getIneligibilityReasons',
        'package_quantity' => 'getPackageQuantity',
        'status' => 'getStatus'
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
        $this->container['ineligibility_reasons'] = isset($data['ineligibility_reasons']) ? $data['ineligibility_reasons'] : null;
        $this->container['package_quantity'] = isset($data['package_quantity']) ? $data['package_quantity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['package_quantity'] === null) {
            $invalidProperties[] = "'package_quantity' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets ineligibility_reasons
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\SkuIneligibilityReason[]
     */
    public function getIneligibilityReasons()
    {
        return $this->container['ineligibility_reasons'];
    }

    /**
     * Sets ineligibility_reasons
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\SkuIneligibilityReason[] $ineligibility_reasons If not eligible, these are list of error codes and descriptions.
     *
     * @return $this
     */
    public function setIneligibilityReasons($ineligibility_reasons)
    {
        $this->container['ineligibility_reasons'] = $ineligibility_reasons;

        return $this;
    }

    /**
     * Gets package_quantity
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity
     */
    public function getPackageQuantity()
    {
        return $this->container['package_quantity'];
    }

    /**
     * Sets package_quantity
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity $package_quantity package_quantity
     *
     * @return $this
     */
    public function setPackageQuantity($package_quantity)
    {
        $this->container['package_quantity'] = $package_quantity;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\InboundEligibilityStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\InboundEligibilityStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
