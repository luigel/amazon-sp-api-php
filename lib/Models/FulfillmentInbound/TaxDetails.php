<?php
/**
 * TaxDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * OpenAPI spec version: 2024-03-20
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.61
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use \ArrayAccess;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * TaxDetails Class Doc Comment
 *
 * @category Class
 * @description Information used to determine the tax compliance.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'declared_value' => '\Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Currency',
        'hsn_code' => 'string',
        'tax_rates' => '\Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TaxRate[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'declared_value' => null,
        'hsn_code' => null,
        'tax_rates' => null
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
        'declared_value' => 'declaredValue',
        'hsn_code' => 'hsnCode',
        'tax_rates' => 'taxRates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'declared_value' => 'setDeclaredValue',
        'hsn_code' => 'setHsnCode',
        'tax_rates' => 'setTaxRates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'declared_value' => 'getDeclaredValue',
        'hsn_code' => 'getHsnCode',
        'tax_rates' => 'getTaxRates'
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
        $this->container['declared_value'] = isset($data['declared_value']) ? $data['declared_value'] : null;
        $this->container['hsn_code'] = isset($data['hsn_code']) ? $data['hsn_code'] : null;
        $this->container['tax_rates'] = isset($data['tax_rates']) ? $data['tax_rates'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets declared_value
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Currency
     */
    public function getDeclaredValue()
    {
        return $this->container['declared_value'];
    }

    /**
     * Sets declared_value
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Currency $declared_value declared_value
     *
     * @return $this
     */
    public function setDeclaredValue($declared_value)
    {
        $this->container['declared_value'] = $declared_value;

        return $this;
    }

    /**
     * Gets hsn_code
     *
     * @return string
     */
    public function getHsnCode()
    {
        return $this->container['hsn_code'];
    }

    /**
     * Sets hsn_code
     *
     * @param string $hsn_code Harmonized System of Nomenclature code.
     *
     * @return $this
     */
    public function setHsnCode($hsn_code)
    {
        $this->container['hsn_code'] = $hsn_code;

        return $this;
    }

    /**
     * Gets tax_rates
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TaxRate[]
     */
    public function getTaxRates()
    {
        return $this->container['tax_rates'];
    }

    /**
     * Sets tax_rates
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TaxRate[] $tax_rates List of tax rates.
     *
     * @return $this
     */
    public function setTaxRates($tax_rates)
    {
        $this->container['tax_rates'] = $tax_rates;

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
