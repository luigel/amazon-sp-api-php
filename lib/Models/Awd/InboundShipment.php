<?php
/**
 * InboundShipment
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
 * InboundShipment Class Doc Comment
 *
 * @category Class
 * @description Represents an AWD inbound shipment.
 */
class InboundShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InboundShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carrier_code' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\CarrierCode',
        'created_at' => '\DateTime',
        'destination_address' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\Address',
        'external_reference_id' => 'string',
        'order_id' => 'string',
        'origin_address' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\Address',
        'received_quantity' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InventoryQuantity[]',
        'ship_by' => '\DateTime',
        'shipment_container_quantities' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[]',
        'shipment_id' => 'string',
        'shipment_sku_quantities' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\SkuQuantity[]',
        'shipment_status' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundShipmentStatus',
        'tracking_id' => 'string',
        'updated_at' => '\DateTime',
        'warehouse_reference_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'carrier_code' => null,
        'created_at' => 'date-time',
        'destination_address' => null,
        'external_reference_id' => null,
        'order_id' => null,
        'origin_address' => null,
        'received_quantity' => null,
        'ship_by' => 'date-time',
        'shipment_container_quantities' => null,
        'shipment_id' => null,
        'shipment_sku_quantities' => null,
        'shipment_status' => null,
        'tracking_id' => null,
        'updated_at' => 'date-time',
        'warehouse_reference_id' => null
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
        'carrier_code' => 'carrierCode',
        'created_at' => 'createdAt',
        'destination_address' => 'destinationAddress',
        'external_reference_id' => 'externalReferenceId',
        'order_id' => 'orderId',
        'origin_address' => 'originAddress',
        'received_quantity' => 'receivedQuantity',
        'ship_by' => 'shipBy',
        'shipment_container_quantities' => 'shipmentContainerQuantities',
        'shipment_id' => 'shipmentId',
        'shipment_sku_quantities' => 'shipmentSkuQuantities',
        'shipment_status' => 'shipmentStatus',
        'tracking_id' => 'trackingId',
        'updated_at' => 'updatedAt',
        'warehouse_reference_id' => 'warehouseReferenceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_code' => 'setCarrierCode',
        'created_at' => 'setCreatedAt',
        'destination_address' => 'setDestinationAddress',
        'external_reference_id' => 'setExternalReferenceId',
        'order_id' => 'setOrderId',
        'origin_address' => 'setOriginAddress',
        'received_quantity' => 'setReceivedQuantity',
        'ship_by' => 'setShipBy',
        'shipment_container_quantities' => 'setShipmentContainerQuantities',
        'shipment_id' => 'setShipmentId',
        'shipment_sku_quantities' => 'setShipmentSkuQuantities',
        'shipment_status' => 'setShipmentStatus',
        'tracking_id' => 'setTrackingId',
        'updated_at' => 'setUpdatedAt',
        'warehouse_reference_id' => 'setWarehouseReferenceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_code' => 'getCarrierCode',
        'created_at' => 'getCreatedAt',
        'destination_address' => 'getDestinationAddress',
        'external_reference_id' => 'getExternalReferenceId',
        'order_id' => 'getOrderId',
        'origin_address' => 'getOriginAddress',
        'received_quantity' => 'getReceivedQuantity',
        'ship_by' => 'getShipBy',
        'shipment_container_quantities' => 'getShipmentContainerQuantities',
        'shipment_id' => 'getShipmentId',
        'shipment_sku_quantities' => 'getShipmentSkuQuantities',
        'shipment_status' => 'getShipmentStatus',
        'tracking_id' => 'getTrackingId',
        'updated_at' => 'getUpdatedAt',
        'warehouse_reference_id' => 'getWarehouseReferenceId'
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
        $this->container['carrier_code'] = isset($data['carrier_code']) ? $data['carrier_code'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['external_reference_id'] = isset($data['external_reference_id']) ? $data['external_reference_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['origin_address'] = isset($data['origin_address']) ? $data['origin_address'] : null;
        $this->container['received_quantity'] = isset($data['received_quantity']) ? $data['received_quantity'] : null;
        $this->container['ship_by'] = isset($data['ship_by']) ? $data['ship_by'] : null;
        $this->container['shipment_container_quantities'] = isset($data['shipment_container_quantities']) ? $data['shipment_container_quantities'] : null;
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['shipment_sku_quantities'] = isset($data['shipment_sku_quantities']) ? $data['shipment_sku_quantities'] : null;
        $this->container['shipment_status'] = isset($data['shipment_status']) ? $data['shipment_status'] : null;
        $this->container['tracking_id'] = isset($data['tracking_id']) ? $data['tracking_id'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['warehouse_reference_id'] = isset($data['warehouse_reference_id']) ? $data['warehouse_reference_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['destination_address'] === null) {
            $invalidProperties[] = "'destination_address' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['origin_address'] === null) {
            $invalidProperties[] = "'origin_address' can't be null";
        }
        if ($this->container['shipment_container_quantities'] === null) {
            $invalidProperties[] = "'shipment_container_quantities' can't be null";
        }
        if ($this->container['shipment_id'] === null) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if ($this->container['shipment_status'] === null) {
            $invalidProperties[] = "'shipment_status' can't be null";
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
     * Gets carrier_code
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\CarrierCode
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\CarrierCode $carrier_code carrier_code
     *
     * @return $this
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

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
     * @param \DateTime $created_at Timestamp when the shipment was created. The date is returned in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets destination_address
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\Address
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\Address $destination_address destination_address
     *
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

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
     * @param string $external_reference_id Client-provided reference ID that can correlate this shipment to client resources. For example, to map this shipment to an internal bookkeeping order record.
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
     * @param string $order_id The AWD inbound order ID that this inbound shipment belongs to.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

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
     * Gets received_quantity
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\InventoryQuantity[]
     */
    public function getReceivedQuantity()
    {
        return $this->container['received_quantity'];
    }

    /**
     * Sets received_quantity
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\InventoryQuantity[] $received_quantity Quantity received (at the receiving end) as part of this shipment.
     *
     * @return $this
     */
    public function setReceivedQuantity($received_quantity)
    {
        $this->container['received_quantity'] = $received_quantity;

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
     * @param \DateTime $ship_by Timestamp when the shipment will be shipped.
     *
     * @return $this
     */
    public function setShipBy($ship_by)
    {
        $this->container['ship_by'] = $ship_by;

        return $this;
    }

    /**
     * Gets shipment_container_quantities
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[]
     */
    public function getShipmentContainerQuantities()
    {
        return $this->container['shipment_container_quantities'];
    }

    /**
     * Sets shipment_container_quantities
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[] $shipment_container_quantities Packages that are part of this shipment.
     *
     * @return $this
     */
    public function setShipmentContainerQuantities($shipment_container_quantities)
    {
        $this->container['shipment_container_quantities'] = $shipment_container_quantities;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id Unique shipment ID.
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipment_sku_quantities
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\SkuQuantity[]
     */
    public function getShipmentSkuQuantities()
    {
        return $this->container['shipment_sku_quantities'];
    }

    /**
     * Sets shipment_sku_quantities
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\SkuQuantity[] $shipment_sku_quantities Quantity details at SKU level for the shipment. This attribute will only appear if the skuQuantities parameter in the request is set to SHOW.
     *
     * @return $this
     */
    public function setShipmentSkuQuantities($shipment_sku_quantities)
    {
        $this->container['shipment_sku_quantities'] = $shipment_sku_quantities;

        return $this;
    }

    /**
     * Gets shipment_status
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundShipmentStatus
     */
    public function getShipmentStatus()
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\InboundShipmentStatus $shipment_status shipment_status
     *
     * @return $this
     */
    public function setShipmentStatus($shipment_status)
    {
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }

    /**
     * Gets tracking_id
     *
     * @return string
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     *
     * @param string $tracking_id Carrier-unique tracking ID for this shipment.
     *
     * @return $this
     */
    public function setTrackingId($tracking_id)
    {
        $this->container['tracking_id'] = $tracking_id;

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
     * @param \DateTime $updated_at Timestamp when the shipment was updated. The date is returned in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets warehouse_reference_id
     *
     * @return string
     */
    public function getWarehouseReferenceId()
    {
        return $this->container['warehouse_reference_id'];
    }

    /**
     * Sets warehouse_reference_id
     *
     * @param string $warehouse_reference_id An AWD-provided reference ID that you can use to interact with the warehouse. For example, a carrier appointment booking.
     *
     * @return $this
     */
    public function setWarehouseReferenceId($warehouse_reference_id)
    {
        $this->container['warehouse_reference_id'] = $warehouse_reference_id;

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
