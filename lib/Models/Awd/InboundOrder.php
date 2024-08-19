<?php
/**
 * InboundOrder
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
 * InboundOrder Class Doc Comment
 *
 * @category Class
 * @description Represents an AWD inbound order.
 */
class InboundOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InboundOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_placed_inbound_shipments' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\InboundShipment[]',
        'created_at' => '\DateTime',
        'external_reference_id' => 'string',
        'order_id' => 'string',
        'order_status' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\InboundStatus',
        'order_version' => 'string',
        'origin_address' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\Address',
        'packages_to_inbound' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[]',
        'ship_by' => '\DateTime',
        'transportation_preference' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\TransportationPreference',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channel_placed_inbound_shipments' => null,
        'created_at' => 'date-time',
        'external_reference_id' => null,
        'order_id' => null,
        'order_status' => null,
        'order_version' => null,
        'origin_address' => null,
        'packages_to_inbound' => null,
        'ship_by' => 'date-time',
        'transportation_preference' => null,
        'updated_at' => 'date-time'
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
        'channel_placed_inbound_shipments' => 'channelPlacedInboundShipments',
        'created_at' => 'createdAt',
        'external_reference_id' => 'externalReferenceId',
        'order_id' => 'orderId',
        'order_status' => 'orderStatus',
        'order_version' => 'orderVersion',
        'origin_address' => 'originAddress',
        'packages_to_inbound' => 'packagesToInbound',
        'ship_by' => 'shipBy',
        'transportation_preference' => 'transportationPreference',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_placed_inbound_shipments' => 'setChannelPlacedInboundShipments',
        'created_at' => 'setCreatedAt',
        'external_reference_id' => 'setExternalReferenceId',
        'order_id' => 'setOrderId',
        'order_status' => 'setOrderStatus',
        'order_version' => 'setOrderVersion',
        'origin_address' => 'setOriginAddress',
        'packages_to_inbound' => 'setPackagesToInbound',
        'ship_by' => 'setShipBy',
        'transportation_preference' => 'setTransportationPreference',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_placed_inbound_shipments' => 'getChannelPlacedInboundShipments',
        'created_at' => 'getCreatedAt',
        'external_reference_id' => 'getExternalReferenceId',
        'order_id' => 'getOrderId',
        'order_status' => 'getOrderStatus',
        'order_version' => 'getOrderVersion',
        'origin_address' => 'getOriginAddress',
        'packages_to_inbound' => 'getPackagesToInbound',
        'ship_by' => 'getShipBy',
        'transportation_preference' => 'getTransportationPreference',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['channel_placed_inbound_shipments'] = isset($data['channel_placed_inbound_shipments']) ? $data['channel_placed_inbound_shipments'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['external_reference_id'] = isset($data['external_reference_id']) ? $data['external_reference_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['order_version'] = isset($data['order_version']) ? $data['order_version'] : null;
        $this->container['origin_address'] = isset($data['origin_address']) ? $data['origin_address'] : null;
        $this->container['packages_to_inbound'] = isset($data['packages_to_inbound']) ? $data['packages_to_inbound'] : null;
        $this->container['ship_by'] = isset($data['ship_by']) ? $data['ship_by'] : null;
        $this->container['transportation_preference'] = isset($data['transportation_preference']) ? $data['transportation_preference'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['channel_placed_inbound_shipments'] === null) {
            $invalidProperties[] = "'channel_placed_inbound_shipments' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['order_status'] === null) {
            $invalidProperties[] = "'order_status' can't be null";
        }
        if ($this->container['order_version'] === null) {
            $invalidProperties[] = "'order_version' can't be null";
        }
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
     * Gets channel_placed_inbound_shipments
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\InboundShipment[]
     */
    public function getChannelPlacedInboundShipments()
    {
        return $this->container['channel_placed_inbound_shipments'];
    }

    /**
     * Sets channel_placed_inbound_shipments
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\InboundShipment[] $channel_placed_inbound_shipments List of inbound shipments part of this order.
     *
     * @return $this
     */
    public function setChannelPlacedInboundShipments($channel_placed_inbound_shipments)
    {
        $this->container['channel_placed_inbound_shipments'] = $channel_placed_inbound_shipments;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Date when this order was created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
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
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id Inbound order ID.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\InboundStatus
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\InboundStatus $order_status order_status
     *
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets order_version
     *
     * @return string
     */
    public function getOrderVersion()
    {
        return $this->container['order_version'];
    }

    /**
     * Sets order_version
     *
     * @param string $order_version Inbound order version.
     *
     * @return $this
     */
    public function setOrderVersion($order_version)
    {
        $this->container['order_version'] = $order_version;

        return $this;
    }

    /**
     * Gets origin_address
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\Address
     */
    public function getOriginAddress()
    {
        return $this->container['origin_address'];
    }

    /**
     * Sets origin_address
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\Address $origin_address origin_address
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
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[]
     */
    public function getPackagesToInbound()
    {
        return $this->container['packages_to_inbound'];
    }

    /**
     * Sets packages_to_inbound
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[] $packages_to_inbound List of packages to be inbounded.
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
     * @param \DateTime $ship_by Date by which this order will be shipped.
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
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\TransportationPreference
     */
    public function getTransportationPreference()
    {
        return $this->container['transportation_preference'];
    }

    /**
     * Sets transportation_preference
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\TransportationPreference $transportation_preference transportation_preference
     *
     * @return $this
     */
    public function setTransportationPreference($transportation_preference)
    {
        $this->container['transportation_preference'] = $transportation_preference;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Date when this order was last updated.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
