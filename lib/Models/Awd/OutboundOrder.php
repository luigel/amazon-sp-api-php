<?php
/**
 * OutboundOrder
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
 * OutboundOrder Class Doc Comment
 *
 * @category Class
 * @description Represents an AWD outbound order.
 */
class OutboundOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OutboundOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'confirmed_on' => '\DateTime',
        'created_at' => '\DateTime',
        'eligible_packages_to_outbound' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[]',
        'eligible_products_to_outbound' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\ProductQuantity[]',
        'execution_errors' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\OutboundExecutionError[]',
        'order_id' => 'string',
        'order_preferences' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\OrderAttribute[]',
        'order_status' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\OutboundStatus',
        'outbound_shipments' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\OutboundShipment[]',
        'packages_to_outbound' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[]',
        'products_to_outbound' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\ProductQuantity[]',
        'shipped_outbound_packages' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[]',
        'shipped_outbound_products' => '\Luigel\AmazonSellingPartnerAPI\Models\Awd;\ProductQuantity[]',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'confirmed_on' => 'date-time',
        'created_at' => 'date-time',
        'eligible_packages_to_outbound' => null,
        'eligible_products_to_outbound' => null,
        'execution_errors' => null,
        'order_id' => null,
        'order_preferences' => null,
        'order_status' => null,
        'outbound_shipments' => null,
        'packages_to_outbound' => null,
        'products_to_outbound' => null,
        'shipped_outbound_packages' => null,
        'shipped_outbound_products' => null,
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
        'confirmed_on' => 'confirmedOn',
        'created_at' => 'createdAt',
        'eligible_packages_to_outbound' => 'eligiblePackagesToOutbound',
        'eligible_products_to_outbound' => 'eligibleProductsToOutbound',
        'execution_errors' => 'executionErrors',
        'order_id' => 'orderId',
        'order_preferences' => 'orderPreferences',
        'order_status' => 'orderStatus',
        'outbound_shipments' => 'outboundShipments',
        'packages_to_outbound' => 'packagesToOutbound',
        'products_to_outbound' => 'productsToOutbound',
        'shipped_outbound_packages' => 'shippedOutboundPackages',
        'shipped_outbound_products' => 'shippedOutboundProducts',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'confirmed_on' => 'setConfirmedOn',
        'created_at' => 'setCreatedAt',
        'eligible_packages_to_outbound' => 'setEligiblePackagesToOutbound',
        'eligible_products_to_outbound' => 'setEligibleProductsToOutbound',
        'execution_errors' => 'setExecutionErrors',
        'order_id' => 'setOrderId',
        'order_preferences' => 'setOrderPreferences',
        'order_status' => 'setOrderStatus',
        'outbound_shipments' => 'setOutboundShipments',
        'packages_to_outbound' => 'setPackagesToOutbound',
        'products_to_outbound' => 'setProductsToOutbound',
        'shipped_outbound_packages' => 'setShippedOutboundPackages',
        'shipped_outbound_products' => 'setShippedOutboundProducts',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confirmed_on' => 'getConfirmedOn',
        'created_at' => 'getCreatedAt',
        'eligible_packages_to_outbound' => 'getEligiblePackagesToOutbound',
        'eligible_products_to_outbound' => 'getEligibleProductsToOutbound',
        'execution_errors' => 'getExecutionErrors',
        'order_id' => 'getOrderId',
        'order_preferences' => 'getOrderPreferences',
        'order_status' => 'getOrderStatus',
        'outbound_shipments' => 'getOutboundShipments',
        'packages_to_outbound' => 'getPackagesToOutbound',
        'products_to_outbound' => 'getProductsToOutbound',
        'shipped_outbound_packages' => 'getShippedOutboundPackages',
        'shipped_outbound_products' => 'getShippedOutboundProducts',
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
        $this->container['confirmed_on'] = isset($data['confirmed_on']) ? $data['confirmed_on'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['eligible_packages_to_outbound'] = isset($data['eligible_packages_to_outbound']) ? $data['eligible_packages_to_outbound'] : null;
        $this->container['eligible_products_to_outbound'] = isset($data['eligible_products_to_outbound']) ? $data['eligible_products_to_outbound'] : null;
        $this->container['execution_errors'] = isset($data['execution_errors']) ? $data['execution_errors'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_preferences'] = isset($data['order_preferences']) ? $data['order_preferences'] : null;
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['outbound_shipments'] = isset($data['outbound_shipments']) ? $data['outbound_shipments'] : null;
        $this->container['packages_to_outbound'] = isset($data['packages_to_outbound']) ? $data['packages_to_outbound'] : null;
        $this->container['products_to_outbound'] = isset($data['products_to_outbound']) ? $data['products_to_outbound'] : null;
        $this->container['shipped_outbound_packages'] = isset($data['shipped_outbound_packages']) ? $data['shipped_outbound_packages'] : null;
        $this->container['shipped_outbound_products'] = isset($data['shipped_outbound_products']) ? $data['shipped_outbound_products'] : null;
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

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['order_status'] === null) {
            $invalidProperties[] = "'order_status' can't be null";
        }
        if ($this->container['outbound_shipments'] === null) {
            $invalidProperties[] = "'outbound_shipments' can't be null";
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
     * Gets confirmed_on
     *
     * @return \DateTime
     */
    public function getConfirmedOn()
    {
        return $this->container['confirmed_on'];
    }

    /**
     * Sets confirmed_on
     *
     * @param \DateTime $confirmed_on Date on which this outbound order was confirmed.
     *
     * @return $this
     */
    public function setConfirmedOn($confirmed_on)
    {
        $this->container['confirmed_on'] = $confirmed_on;

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
     * @param \DateTime $created_at Date on which this outbound order was created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets eligible_packages_to_outbound
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[]
     */
    public function getEligiblePackagesToOutbound()
    {
        return $this->container['eligible_packages_to_outbound'];
    }

    /**
     * Sets eligible_packages_to_outbound
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[] $eligible_packages_to_outbound List of packages that are eligible for outbound.
     *
     * @return $this
     */
    public function setEligiblePackagesToOutbound($eligible_packages_to_outbound)
    {
        $this->container['eligible_packages_to_outbound'] = $eligible_packages_to_outbound;

        return $this;
    }

    /**
     * Gets eligible_products_to_outbound
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\ProductQuantity[]
     */
    public function getEligibleProductsToOutbound()
    {
        return $this->container['eligible_products_to_outbound'];
    }

    /**
     * Sets eligible_products_to_outbound
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\ProductQuantity[] $eligible_products_to_outbound List of product units that are eligible for outbound.
     *
     * @return $this
     */
    public function setEligibleProductsToOutbound($eligible_products_to_outbound)
    {
        $this->container['eligible_products_to_outbound'] = $eligible_products_to_outbound;

        return $this;
    }

    /**
     * Gets execution_errors
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\OutboundExecutionError[]
     */
    public function getExecutionErrors()
    {
        return $this->container['execution_errors'];
    }

    /**
     * Sets execution_errors
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\OutboundExecutionError[] $execution_errors Execution errors associated with the outbound order. This field will be populated if the order failed validation.
     *
     * @return $this
     */
    public function setExecutionErrors($execution_errors)
    {
        $this->container['execution_errors'] = $execution_errors;

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
     * @param string $order_id Order ID for the outbound order.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_preferences
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\OrderAttribute[]
     */
    public function getOrderPreferences()
    {
        return $this->container['order_preferences'];
    }

    /**
     * Sets order_preferences
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\OrderAttribute[] $order_preferences Order preferences for this outbound order.
     *
     * @return $this
     */
    public function setOrderPreferences($order_preferences)
    {
        $this->container['order_preferences'] = $order_preferences;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\OutboundStatus
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\OutboundStatus $order_status order_status
     *
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets outbound_shipments
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\OutboundShipment[]
     */
    public function getOutboundShipments()
    {
        return $this->container['outbound_shipments'];
    }

    /**
     * Sets outbound_shipments
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\OutboundShipment[] $outbound_shipments List of outbound shipments that are part of this order.
     *
     * @return $this
     */
    public function setOutboundShipments($outbound_shipments)
    {
        $this->container['outbound_shipments'] = $outbound_shipments;

        return $this;
    }

    /**
     * Gets packages_to_outbound
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[]
     */
    public function getPackagesToOutbound()
    {
        return $this->container['packages_to_outbound'];
    }

    /**
     * Sets packages_to_outbound
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[] $packages_to_outbound List of packages to be outbound.
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
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\ProductQuantity[]
     */
    public function getProductsToOutbound()
    {
        return $this->container['products_to_outbound'];
    }

    /**
     * Sets products_to_outbound
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\ProductQuantity[] $products_to_outbound List of product units to be outbound.
     *
     * @return $this
     */
    public function setProductsToOutbound($products_to_outbound)
    {
        $this->container['products_to_outbound'] = $products_to_outbound;

        return $this;
    }

    /**
     * Gets shipped_outbound_packages
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[]
     */
    public function getShippedOutboundPackages()
    {
        return $this->container['shipped_outbound_packages'];
    }

    /**
     * Sets shipped_outbound_packages
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\DistributionPackageQuantity[] $shipped_outbound_packages Outbound packages that are shipped after the execution has completed post confirmation.
     *
     * @return $this
     */
    public function setShippedOutboundPackages($shipped_outbound_packages)
    {
        $this->container['shipped_outbound_packages'] = $shipped_outbound_packages;

        return $this;
    }

    /**
     * Gets shipped_outbound_products
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Awd;\ProductQuantity[]
     */
    public function getShippedOutboundProducts()
    {
        return $this->container['shipped_outbound_products'];
    }

    /**
     * Sets shipped_outbound_products
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Awd;\ProductQuantity[] $shipped_outbound_products Outbound product units that are shipped after the execution has completed post confirmation.
     *
     * @return $this
     */
    public function setShippedOutboundProducts($shipped_outbound_products)
    {
        $this->container['shipped_outbound_products'] = $shipped_outbound_products;

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
     * @param \DateTime $updated_at Date on which this outbound order was last updated.
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
