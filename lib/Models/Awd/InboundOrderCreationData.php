<?php
/**
 * InboundOrderCreationData
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
 * InboundOrderCreationData Class Doc Comment
 *
 * @category Class
 * @description Payload for creating an inbound order.
 */
class InboundOrderCreationData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InboundOrderCreationData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_reference_id' => 'string',
        'origin_address' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\Address',
        'packages_to_inbound' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[]',
        'ship_by' => '\DateTime',
        'transportation_preference' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\TransportationPreference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'external_reference_id' => null,
        'origin_address' => null,
        'packages_to_inbound' => null,
        'ship_by' => 'date-time',
        'transportation_preference' => null
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
        'external_reference_id' => 'externalReferenceId',
        'origin_address' => 'originAddress',
        'packages_to_inbound' => 'packagesToInbound',
        'ship_by' => 'shipBy',
        'transportation_preference' => 'transportationPreference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_reference_id' => 'setExternalReferenceId',
        'origin_address' => 'setOriginAddress',
        'packages_to_inbound' => 'setPackagesToInbound',
        'ship_by' => 'setShipBy',
        'transportation_preference' => 'setTransportationPreference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_reference_id' => 'getExternalReferenceId',
        'origin_address' => 'getOriginAddress',
        'packages_to_inbound' => 'getPackagesToInbound',
        'ship_by' => 'getShipBy',
        'transportation_preference' => 'getTransportationPreference'
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
        $this->container['external_reference_id'] = isset($data['external_reference_id']) ? $data['external_reference_id'] : null;
        $this->container['origin_address'] = isset($data['origin_address']) ? $data['origin_address'] : null;
        $this->container['packages_to_inbound'] = isset($data['packages_to_inbound']) ? $data['packages_to_inbound'] : null;
        $this->container['ship_by'] = isset($data['ship_by']) ? $data['ship_by'] : null;
        $this->container['transportation_preference'] = isset($data['transportation_preference']) ? $data['transportation_preference'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['origin_address'] === null) {
            $invalidProperties[] = "'origin_address' can't be null";
        }
        if ($this->container['packages_to_inbound'] === null) {
            $invalidProperties[] = "'packages_to_inbound' can't be null";
        }
        if ($this->container['transportation_preference'] === null) {
            $invalidProperties[] = "'transportation_preference' can't be null";
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
     * Gets external_reference_id
     *
     * @return string
     */
    public function getExternalReferenceId()
    {
        return $this->container['external_reference_id'];
    }

    /**
     * Sets external_reference_id
     *
     * @param string $external_reference_id Reference ID that can be used to correlate the order with partner resources.
     *
     * @return $this
     */
    public function setExternalReferenceId($external_reference_id)
    {
        $this->container['external_reference_id'] = $external_reference_id;

        return $this;
    }

    /**
     * Gets origin_address
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\Address
     */
    public function getOriginAddress()
    {
        return $this->container['origin_address'];
    }

    /**
     * Sets origin_address
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\Address $origin_address origin_address
     *
     * @return $this
     */
    public function setOriginAddress($origin_address)
    {
        $this->container['origin_address'] = $origin_address;

        return $this;
    }

    /**
     * Gets packages_to_inbound
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[]
     */
    public function getPackagesToInbound()
    {
        return $this->container['packages_to_inbound'];
    }

    /**
     * Sets packages_to_inbound
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[] $packages_to_inbound List of packages to be inbounded.
     *
     * @return $this
     */
    public function setPackagesToInbound($packages_to_inbound)
    {
        $this->container['packages_to_inbound'] = $packages_to_inbound;

        return $this;
    }

    /**
     * Gets ship_by
     *
     * @return \DateTime
     */
    public function getShipBy()
    {
        return $this->container['ship_by'];
    }

    /**
     * Sets ship_by
     *
     * @param \DateTime $ship_by Estimated date by when goods have to be picked up.
     *
     * @return $this
     */
    public function setShipBy($ship_by)
    {
        $this->container['ship_by'] = $ship_by;

        return $this;
    }

    /**
     * Gets transportation_preference
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\TransportationPreference
     */
    public function getTransportationPreference()
    {
        return $this->container['transportation_preference'];
    }

    /**
     * Sets transportation_preference
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\TransportationPreference $transportation_preference transportation_preference
     *
     * @return $this
     */
    public function setTransportationPreference($transportation_preference)
    {
        $this->container['transportation_preference'] = $transportation_preference;

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
