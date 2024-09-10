<?php
/**
 * CollectionFormsHistoryRecord
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
 * CollectionFormsHistoryRecord Class Doc Comment
 *
 * @category Class
 * @description Active Account Details
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CollectionFormsHistoryRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CollectionFormsHistoryRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carrier_name' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\CarrierName',
        'creation_date' => 'string',
        'generation_status' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerationStatus',
        'collection_form_id' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\CollectionFormId',
        'ship_from_address' => '\Luigel\AmazonSellingPartnerAPI\Models\Shipping\Address'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'carrier_name' => null,
        'creation_date' => 'dateTime',
        'generation_status' => null,
        'collection_form_id' => null,
        'ship_from_address' => null
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
        'carrier_name' => 'carrierName',
        'creation_date' => 'creationDate',
        'generation_status' => 'generationStatus',
        'collection_form_id' => 'collectionFormId',
        'ship_from_address' => 'shipFromAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_name' => 'setCarrierName',
        'creation_date' => 'setCreationDate',
        'generation_status' => 'setGenerationStatus',
        'collection_form_id' => 'setCollectionFormId',
        'ship_from_address' => 'setShipFromAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_name' => 'getCarrierName',
        'creation_date' => 'getCreationDate',
        'generation_status' => 'getGenerationStatus',
        'collection_form_id' => 'getCollectionFormId',
        'ship_from_address' => 'getShipFromAddress'
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
        $this->container['carrier_name'] = isset($data['carrier_name']) ? $data['carrier_name'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['generation_status'] = isset($data['generation_status']) ? $data['generation_status'] : null;
        $this->container['collection_form_id'] = isset($data['collection_form_id']) ? $data['collection_form_id'] : null;
        $this->container['ship_from_address'] = isset($data['ship_from_address']) ? $data['ship_from_address'] : null;
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
     * Gets carrier_name
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\CarrierName
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\CarrierName $carrier_name carrier_name
     *
     * @return $this
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string $creation_date Creation Time for this account.
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets generation_status
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerationStatus
     */
    public function getGenerationStatus()
    {
        return $this->container['generation_status'];
    }

    /**
     * Sets generation_status
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\GenerationStatus $generation_status generation_status
     *
     * @return $this
     */
    public function setGenerationStatus($generation_status)
    {
        $this->container['generation_status'] = $generation_status;

        return $this;
    }

    /**
     * Gets collection_form_id
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\CollectionFormId
     */
    public function getCollectionFormId()
    {
        return $this->container['collection_form_id'];
    }

    /**
     * Sets collection_form_id
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\CollectionFormId $collection_form_id collection_form_id
     *
     * @return $this
     */
    public function setCollectionFormId($collection_form_id)
    {
        $this->container['collection_form_id'] = $collection_form_id;

        return $this;
    }

    /**
     * Gets ship_from_address
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Shipping\Address $ship_from_address ship_from_address
     *
     * @return $this
     */
    public function setShipFromAddress($ship_from_address)
    {
        $this->container['ship_from_address'] = $ship_from_address;

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
