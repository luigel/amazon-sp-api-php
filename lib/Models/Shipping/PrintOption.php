<?php
/**
 * PrintOption
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
 * PrintOption Class Doc Comment
 *
 * @category Class
 * @description The format options available for a label.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrintOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PrintOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'supported_dpis' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\Dpi[]',
        'supported_page_layouts' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\PageLayout[]',
        'supported_file_joining_options' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\NeedFileJoining[]',
        'supported_document_details' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\SupportedDocumentDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'supported_dpis' => null,
        'supported_page_layouts' => null,
        'supported_file_joining_options' => null,
        'supported_document_details' => null
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
        'supported_dpis' => 'supportedDPIs',
        'supported_page_layouts' => 'supportedPageLayouts',
        'supported_file_joining_options' => 'supportedFileJoiningOptions',
        'supported_document_details' => 'supportedDocumentDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'supported_dpis' => 'setSupportedDpis',
        'supported_page_layouts' => 'setSupportedPageLayouts',
        'supported_file_joining_options' => 'setSupportedFileJoiningOptions',
        'supported_document_details' => 'setSupportedDocumentDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'supported_dpis' => 'getSupportedDpis',
        'supported_page_layouts' => 'getSupportedPageLayouts',
        'supported_file_joining_options' => 'getSupportedFileJoiningOptions',
        'supported_document_details' => 'getSupportedDocumentDetails'
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
        $this->container['supported_dpis'] = isset($data['supported_dpis']) ? $data['supported_dpis'] : null;
        $this->container['supported_page_layouts'] = isset($data['supported_page_layouts']) ? $data['supported_page_layouts'] : null;
        $this->container['supported_file_joining_options'] = isset($data['supported_file_joining_options']) ? $data['supported_file_joining_options'] : null;
        $this->container['supported_document_details'] = isset($data['supported_document_details']) ? $data['supported_document_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['supported_page_layouts'] === null) {
            $invalidProperties[] = "'supported_page_layouts' can't be null";
        }
        if ($this->container['supported_file_joining_options'] === null) {
            $invalidProperties[] = "'supported_file_joining_options' can't be null";
        }
        if ($this->container['supported_document_details'] === null) {
            $invalidProperties[] = "'supported_document_details' can't be null";
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
     * Gets supported_dpis
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Dpi[]
     */
    public function getSupportedDpis()
    {
        return $this->container['supported_dpis'];
    }

    /**
     * Sets supported_dpis
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Dpi[] $supported_dpis A list of the supported DPI options for a document.
     *
     * @return $this
     */
    public function setSupportedDpis($supported_dpis)
    {
        $this->container['supported_dpis'] = $supported_dpis;

        return $this;
    }

    /**
     * Gets supported_page_layouts
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PageLayout[]
     */
    public function getSupportedPageLayouts()
    {
        return $this->container['supported_page_layouts'];
    }

    /**
     * Sets supported_page_layouts
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PageLayout[] $supported_page_layouts A list of the supported page layout options for a document.
     *
     * @return $this
     */
    public function setSupportedPageLayouts($supported_page_layouts)
    {
        $this->container['supported_page_layouts'] = $supported_page_layouts;

        return $this;
    }

    /**
     * Gets supported_file_joining_options
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\NeedFileJoining[]
     */
    public function getSupportedFileJoiningOptions()
    {
        return $this->container['supported_file_joining_options'];
    }

    /**
     * Sets supported_file_joining_options
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\NeedFileJoining[] $supported_file_joining_options A list of the supported needFileJoining boolean values for a document.
     *
     * @return $this
     */
    public function setSupportedFileJoiningOptions($supported_file_joining_options)
    {
        $this->container['supported_file_joining_options'] = $supported_file_joining_options;

        return $this;
    }

    /**
     * Gets supported_document_details
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\SupportedDocumentDetail[]
     */
    public function getSupportedDocumentDetails()
    {
        return $this->container['supported_document_details'];
    }

    /**
     * Sets supported_document_details
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\SupportedDocumentDetail[] $supported_document_details A list of the supported documented details.
     *
     * @return $this
     */
    public function setSupportedDocumentDetails($supported_document_details)
    {
        $this->container['supported_document_details'] = $supported_document_details;

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
