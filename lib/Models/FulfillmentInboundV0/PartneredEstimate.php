<?php
/**
 * PartneredEstimate.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0;

use ArrayAccess;
use Luigel\AmazonSellingPartnerAPI\Models\ModelInterface;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * PartneredEstimate Class Doc Comment.
 *

 * @description The estimated shipping cost for a shipment using an Amazon-partnered carrier.
 *
 * @author   Stefan Neuhaus
 */
class PartneredEstimate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PartneredEstimate';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'amount' => '\Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\Amount',
'confirm_deadline' => '\Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\TimeStampStringType',
'void_deadline' => '\Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\TimeStampStringType',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'amount' => null,
'confirm_deadline' => null,
'void_deadline' => null,    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'Amount',
'confirm_deadline' => 'ConfirmDeadline',
'void_deadline' => 'VoidDeadline',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
'confirm_deadline' => 'setConfirmDeadline',
'void_deadline' => 'setVoidDeadline',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
'confirm_deadline' => 'getConfirmDeadline',
'void_deadline' => 'getVoidDeadline',    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['confirm_deadline'] = isset($data['confirm_deadline']) ? $data['confirm_deadline'] : null;
        $this->container['void_deadline'] = isset($data['void_deadline']) ? $data['void_deadline'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets amount.
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\Amount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\Amount $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets confirm_deadline.
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\TimeStampStringType
     */
    public function getConfirmDeadline()
    {
        return $this->container['confirm_deadline'];
    }

    /**
     * Sets confirm_deadline.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\TimeStampStringType $confirm_deadline confirm_deadline
     *
     * @return $this
     */
    public function setConfirmDeadline($confirm_deadline)
    {
        $this->container['confirm_deadline'] = $confirm_deadline;

        return $this;
    }

    /**
     * Gets void_deadline.
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\TimeStampStringType
     */
    public function getVoidDeadline()
    {
        return $this->container['void_deadline'];
    }

    /**
     * Sets void_deadline.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\TimeStampStringType $void_deadline void_deadline
     *
     * @return $this
     */
    public function setVoidDeadline($void_deadline)
    {
        $this->container['void_deadline'] = $void_deadline;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
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
     * @param int $offset Offset
     *
     * @return void
    */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
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
