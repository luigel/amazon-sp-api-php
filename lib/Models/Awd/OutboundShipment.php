<?php
/**
 * OutboundShipment
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
 * OutboundShipment Class Doc Comment
 *
 * @category Class
 * @description Represents an AWD outbound shipment.
 */
class OutboundShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OutboundShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_at' => '\DateTime',
        'destination_address' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\Address',
        'order_id' => 'string',
        'origin_address' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\Address',
        'shipment_package_quantities' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[]',
        'shipment_id' => 'string',
        'shipment_product_quantities' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\ProductQuantity[]',
        'shipment_status' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundShipmentStatus',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_at' => 'date-time',
        'destination_address' => null,
        'order_id' => null,
        'origin_address' => null,
        'shipment_package_quantities' => null,
        'shipment_id' => null,
        'shipment_product_quantities' => null,
        'shipment_status' => null,
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
        'created_at' => 'createdAt',
        'destination_address' => 'destinationAddress',
        'order_id' => 'orderId',
        'origin_address' => 'originAddress',
        'shipment_package_quantities' => 'shipmentPackageQuantities',
        'shipment_id' => 'shipmentId',
        'shipment_product_quantities' => 'shipmentProductQuantities',
        'shipment_status' => 'shipmentStatus',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'destination_address' => 'setDestinationAddress',
        'order_id' => 'setOrderId',
        'origin_address' => 'setOriginAddress',
        'shipment_package_quantities' => 'setShipmentPackageQuantities',
        'shipment_id' => 'setShipmentId',
        'shipment_product_quantities' => 'setShipmentProductQuantities',
        'shipment_status' => 'setShipmentStatus',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'destination_address' => 'getDestinationAddress',
        'order_id' => 'getOrderId',
        'origin_address' => 'getOriginAddress',
        'shipment_package_quantities' => 'getShipmentPackageQuantities',
        'shipment_id' => 'getShipmentId',
        'shipment_product_quantities' => 'getShipmentProductQuantities',
        'shipment_status' => 'getShipmentStatus',
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['origin_address'] = isset($data['origin_address']) ? $data['origin_address'] : null;
        $this->container['shipment_package_quantities'] = isset($data['shipment_package_quantities']) ? $data['shipment_package_quantities'] : null;
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['shipment_product_quantities'] = isset($data['shipment_product_quantities']) ? $data['shipment_product_quantities'] : null;
        $this->container['shipment_status'] = isset($data['shipment_status']) ? $data['shipment_status'] : null;
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

        if ($this->container['destination_address'] === null) {
            $invalidProperties[] = "'destination_address' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['origin_address'] === null) {
            $invalidProperties[] = "'origin_address' can't be null";
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
     * @param \DateTime $created_at Timestamp when the shipment was created.
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
     * @param string $order_id Outbound order ID this outbound shipment belongs to.
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
     * Gets shipment_package_quantities
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[]
     */
    public function getShipmentPackageQuantities()
    {
        return $this->container['shipment_package_quantities'];
    }

    /**
     * Sets shipment_package_quantities
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\DistributionPackageQuantity[] $shipment_package_quantities Specific distribution packages that are included in the context of this shipment.
     *
     * @return $this
     */
    public function setShipmentPackageQuantities($shipment_package_quantities)
    {
        $this->container['shipment_package_quantities'] = $shipment_package_quantities;

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
     * Gets shipment_product_quantities
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\ProductQuantity[]
     */
    public function getShipmentProductQuantities()
    {
        return $this->container['shipment_product_quantities'];
    }

    /**
     * Sets shipment_product_quantities
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\ProductQuantity[] $shipment_product_quantities Specific product units that are included in the context of this shipment.
     *
     * @return $this
     */
    public function setShipmentProductQuantities($shipment_product_quantities)
    {
        $this->container['shipment_product_quantities'] = $shipment_product_quantities;

        return $this;
    }

    /**
     * Gets shipment_status
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundShipmentStatus
     */
    public function getShipmentStatus()
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd\OutboundShipmentStatus $shipment_status shipment_status
     *
     * @return $this
     */
    public function setShipmentStatus($shipment_status)
    {
        $this->container['shipment_status'] = $shipment_status;

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
     * @param \DateTime $updated_at Timestamp when the shipment was updated.
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
