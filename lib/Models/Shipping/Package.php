<?php
/**
 * Package
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * OpenAPI spec version: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.61
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Luigel\AmazonSellingPartnerAPI\Models\Shipping;

use \ArrayAccess;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Package Class Doc Comment
 *
 * @category Class
 * @description A package to be shipped through a shipping service offering.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Package implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Package';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dimensions' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\Dimensions',
        'weight' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\Weight',
        'insured_value' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\Currency',
        'is_hazmat' => 'bool',
        'seller_display_name' => 'string',
        'charges' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\ChargeList',
        'package_client_reference_id' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\PackageClientReferenceId',
        'items' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\ItemList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dimensions' => null,
        'weight' => null,
        'insured_value' => null,
        'is_hazmat' => null,
        'seller_display_name' => null,
        'charges' => null,
        'package_client_reference_id' => null,
        'items' => null
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
        'dimensions' => 'dimensions',
        'weight' => 'weight',
        'insured_value' => 'insuredValue',
        'is_hazmat' => 'isHazmat',
        'seller_display_name' => 'sellerDisplayName',
        'charges' => 'charges',
        'package_client_reference_id' => 'packageClientReferenceId',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'insured_value' => 'setInsuredValue',
        'is_hazmat' => 'setIsHazmat',
        'seller_display_name' => 'setSellerDisplayName',
        'charges' => 'setCharges',
        'package_client_reference_id' => 'setPackageClientReferenceId',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'insured_value' => 'getInsuredValue',
        'is_hazmat' => 'getIsHazmat',
        'seller_display_name' => 'getSellerDisplayName',
        'charges' => 'getCharges',
        'package_client_reference_id' => 'getPackageClientReferenceId',
        'items' => 'getItems'
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
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['insured_value'] = isset($data['insured_value']) ? $data['insured_value'] : null;
        $this->container['is_hazmat'] = isset($data['is_hazmat']) ? $data['is_hazmat'] : null;
        $this->container['seller_display_name'] = isset($data['seller_display_name']) ? $data['seller_display_name'] : null;
        $this->container['charges'] = isset($data['charges']) ? $data['charges'] : null;
        $this->container['package_client_reference_id'] = isset($data['package_client_reference_id']) ? $data['package_client_reference_id'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['insured_value'] === null) {
            $invalidProperties[] = "'insured_value' can't be null";
        }
        if ($this->container['package_client_reference_id'] === null) {
            $invalidProperties[] = "'package_client_reference_id' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets dimensions
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Dimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Dimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Weight $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets insured_value
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Currency
     */
    public function getInsuredValue()
    {
        return $this->container['insured_value'];
    }

    /**
     * Sets insured_value
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Currency $insured_value insured_value
     *
     * @return $this
     */
    public function setInsuredValue($insured_value)
    {
        $this->container['insured_value'] = $insured_value;

        return $this;
    }

    /**
     * Gets is_hazmat
     *
     * @return bool
     */
    public function getIsHazmat()
    {
        return $this->container['is_hazmat'];
    }

    /**
     * Sets is_hazmat
     *
     * @param bool $is_hazmat When true, the package contains hazardous materials. Defaults to false.
     *
     * @return $this
     */
    public function setIsHazmat($is_hazmat)
    {
        $this->container['is_hazmat'] = $is_hazmat;

        return $this;
    }

    /**
     * Gets seller_display_name
     *
     * @return string
     */
    public function getSellerDisplayName()
    {
        return $this->container['seller_display_name'];
    }

    /**
     * Sets seller_display_name
     *
     * @param string $seller_display_name The seller name displayed on the label.
     *
     * @return $this
     */
    public function setSellerDisplayName($seller_display_name)
    {
        $this->container['seller_display_name'] = $seller_display_name;

        return $this;
    }

    /**
     * Gets charges
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\ChargeList
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\ChargeList $charges charges
     *
     * @return $this
     */
    public function setCharges($charges)
    {
        $this->container['charges'] = $charges;

        return $this;
    }

    /**
     * Gets package_client_reference_id
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PackageClientReferenceId
     */
    public function getPackageClientReferenceId()
    {
        return $this->container['package_client_reference_id'];
    }

    /**
     * Sets package_client_reference_id
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PackageClientReferenceId $package_client_reference_id package_client_reference_id
     *
     * @return $this
     */
    public function setPackageClientReferenceId($package_client_reference_id)
    {
        $this->container['package_client_reference_id'] = $package_client_reference_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\ItemList
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\ItemList $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
