<?php
/**
 * SKUInboundGuidance.
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
 * SKUInboundGuidance Class Doc Comment.
 *

 * @description Reasons why a given seller SKU is not recommended for shipment to Amazon&#x27;s fulfillment network.
 *
 * @author   Stefan Neuhaus
 */
class SKUInboundGuidance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'SKUInboundGuidance';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_sku' => 'string',
'asin' => 'string',
'inbound_guidance' => '\Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\InboundGuidance',
'guidance_reason_list' => '\Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\GuidanceReasonList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_sku' => null,
'asin' => null,
'inbound_guidance' => null,
'guidance_reason_list' => null,    ];

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
        'seller_sku' => 'SellerSKU',
'asin' => 'ASIN',
'inbound_guidance' => 'InboundGuidance',
'guidance_reason_list' => 'GuidanceReasonList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_sku' => 'setSellerSku',
'asin' => 'setAsin',
'inbound_guidance' => 'setInboundGuidance',
'guidance_reason_list' => 'setGuidanceReasonList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
'asin' => 'getAsin',
'inbound_guidance' => 'getInboundGuidance',
'guidance_reason_list' => 'getGuidanceReasonList',    ];

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
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['inbound_guidance'] = isset($data['inbound_guidance']) ? $data['inbound_guidance'] : null;
        $this->container['guidance_reason_list'] = isset($data['guidance_reason_list']) ? $data['guidance_reason_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['seller_sku']) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        if (null === $this->container['asin']) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if (null === $this->container['inbound_guidance']) {
            $invalidProperties[] = "'inbound_guidance' can't be null";
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
     * Gets seller_sku.
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param string $seller_sku the seller SKU of the item
     *
     * @return $this
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets asin.
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin the Amazon Standard Identification Number (ASIN) of the item
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets inbound_guidance.
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\InboundGuidance
     */
    public function getInboundGuidance()
    {
        return $this->container['inbound_guidance'];
    }

    /**
     * Sets inbound_guidance.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\InboundGuidance $inbound_guidance inbound_guidance
     *
     * @return $this
     */
    public function setInboundGuidance($inbound_guidance)
    {
        $this->container['inbound_guidance'] = $inbound_guidance;

        return $this;
    }

    /**
     * Gets guidance_reason_list.
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\GuidanceReasonList
     */
    public function getGuidanceReasonList()
    {
        return $this->container['guidance_reason_list'];
    }

    /**
     * Sets guidance_reason_list.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0\GuidanceReasonList $guidance_reason_list guidance_reason_list
     *
     * @return $this
     */
    public function setGuidanceReasonList($guidance_reason_list)
    {
        $this->container['guidance_reason_list'] = $guidance_reason_list;

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
