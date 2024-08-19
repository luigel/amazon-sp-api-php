<?php
/**
 * InboundEligibility
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
 * InboundEligibility Class Doc Comment
 *
 * @category Class
 * @description Represents the eligibility status of the inbound packages.
 */
class InboundEligibility implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InboundEligibility';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ineligibility_reasons' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\OrderIneligibilityReason[]',
        'packages_to_inbound' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\SkuEligibility[]',
        'previewed_at' => '\DateTime',
        'status' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\InboundEligibilityStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ineligibility_reasons' => null,
        'packages_to_inbound' => null,
        'previewed_at' => 'date-time',
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
        'packages_to_inbound' => 'packagesToInbound',
        'previewed_at' => 'previewedAt',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ineligibility_reasons' => 'setIneligibilityReasons',
        'packages_to_inbound' => 'setPackagesToInbound',
        'previewed_at' => 'setPreviewedAt',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ineligibility_reasons' => 'getIneligibilityReasons',
        'packages_to_inbound' => 'getPackagesToInbound',
        'previewed_at' => 'getPreviewedAt',
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
        $this->container['packages_to_inbound'] = isset($data['packages_to_inbound']) ? $data['packages_to_inbound'] : null;
        $this->container['previewed_at'] = isset($data['previewed_at']) ? $data['previewed_at'] : null;
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

        if ($this->container['packages_to_inbound'] === null) {
            $invalidProperties[] = "'packages_to_inbound' can't be null";
        }
        if ($this->container['previewed_at'] === null) {
            $invalidProperties[] = "'previewed_at' can't be null";
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
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\OrderIneligibilityReason[]
     */
    public function getIneligibilityReasons()
    {
        return $this->container['ineligibility_reasons'];
    }

    /**
     * Sets ineligibility_reasons
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\OrderIneligibilityReason[] $ineligibility_reasons If there are order level eligibility issues, then this list will contain those error codes and descriptions.
     *
     * @return $this
     */
    public function setIneligibilityReasons($ineligibility_reasons)
    {
        $this->container['ineligibility_reasons'] = $ineligibility_reasons;

        return $this;
    }

    /**
     * Gets packages_to_inbound
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\SkuEligibility[]
     */
    public function getPackagesToInbound()
    {
        return $this->container['packages_to_inbound'];
    }

    /**
     * Sets packages_to_inbound
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\SkuEligibility[] $packages_to_inbound Details on SKU eligibility for each inbound package.
     *
     * @return $this
     */
    public function setPackagesToInbound($packages_to_inbound)
    {
        $this->container['packages_to_inbound'] = $packages_to_inbound;

        return $this;
    }

    /**
     * Gets previewed_at
     *
     * @return \DateTime
     */
    public function getPreviewedAt()
    {
        return $this->container['previewed_at'];
    }

    /**
     * Sets previewed_at
     *
     * @param \DateTime $previewed_at Timestamp when the eligibility check is performed.
     *
     * @return $this
     */
    public function setPreviewedAt($previewed_at)
    {
        $this->container['previewed_at'] = $previewed_at;

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
