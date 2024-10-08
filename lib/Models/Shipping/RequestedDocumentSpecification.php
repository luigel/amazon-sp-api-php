<?php
/**
 * RequestedDocumentSpecification
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
 * RequestedDocumentSpecification Class Doc Comment
 *
 * @category Class
 * @description The document specifications requested. For calls to the purchaseShipment operation, the shipment purchase fails if the specified document specifications are not among those returned in the response to the getRates operation.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequestedDocumentSpecification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RequestedDocumentSpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'format' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\DocumentFormat',
        'size' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\DocumentSize',
        'dpi' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\Dpi',
        'page_layout' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\PageLayout',
        'need_file_joining' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\NeedFileJoining',
        'requested_document_types' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\DocumentType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'format' => null,
        'size' => null,
        'dpi' => null,
        'page_layout' => null,
        'need_file_joining' => null,
        'requested_document_types' => null
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
        'format' => 'format',
        'size' => 'size',
        'dpi' => 'dpi',
        'page_layout' => 'pageLayout',
        'need_file_joining' => 'needFileJoining',
        'requested_document_types' => 'requestedDocumentTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format' => 'setFormat',
        'size' => 'setSize',
        'dpi' => 'setDpi',
        'page_layout' => 'setPageLayout',
        'need_file_joining' => 'setNeedFileJoining',
        'requested_document_types' => 'setRequestedDocumentTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format' => 'getFormat',
        'size' => 'getSize',
        'dpi' => 'getDpi',
        'page_layout' => 'getPageLayout',
        'need_file_joining' => 'getNeedFileJoining',
        'requested_document_types' => 'getRequestedDocumentTypes'
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['dpi'] = isset($data['dpi']) ? $data['dpi'] : null;
        $this->container['page_layout'] = isset($data['page_layout']) ? $data['page_layout'] : null;
        $this->container['need_file_joining'] = isset($data['need_file_joining']) ? $data['need_file_joining'] : null;
        $this->container['requested_document_types'] = isset($data['requested_document_types']) ? $data['requested_document_types'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['need_file_joining'] === null) {
            $invalidProperties[] = "'need_file_joining' can't be null";
        }
        if ($this->container['requested_document_types'] === null) {
            $invalidProperties[] = "'requested_document_types' can't be null";
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
     * Gets format
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DocumentFormat
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DocumentFormat $format format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets size
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DocumentSize
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DocumentSize $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets dpi
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Dpi
     */
    public function getDpi()
    {
        return $this->container['dpi'];
    }

    /**
     * Sets dpi
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Dpi $dpi dpi
     *
     * @return $this
     */
    public function setDpi($dpi)
    {
        $this->container['dpi'] = $dpi;

        return $this;
    }

    /**
     * Gets page_layout
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PageLayout
     */
    public function getPageLayout()
    {
        return $this->container['page_layout'];
    }

    /**
     * Sets page_layout
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\PageLayout $page_layout page_layout
     *
     * @return $this
     */
    public function setPageLayout($page_layout)
    {
        $this->container['page_layout'] = $page_layout;

        return $this;
    }

    /**
     * Gets need_file_joining
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\NeedFileJoining
     */
    public function getNeedFileJoining()
    {
        return $this->container['need_file_joining'];
    }

    /**
     * Sets need_file_joining
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\NeedFileJoining $need_file_joining need_file_joining
     *
     * @return $this
     */
    public function setNeedFileJoining($need_file_joining)
    {
        $this->container['need_file_joining'] = $need_file_joining;

        return $this;
    }

    /**
     * Gets requested_document_types
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DocumentType[]
     */
    public function getRequestedDocumentTypes()
    {
        return $this->container['requested_document_types'];
    }

    /**
     * Sets requested_document_types
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\DocumentType[] $requested_document_types A list of the document types requested.
     *
     * @return $this
     */
    public function setRequestedDocumentTypes($requested_document_types)
    {
        $this->container['requested_document_types'] = $requested_document_types;

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
