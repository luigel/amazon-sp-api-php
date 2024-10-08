<?php
/**
 * InboundOperationStatus
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
 * InboundOperationStatus Class Doc Comment
 *
 * @category Class
 * @description GetInboundOperationStatus response.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InboundOperationStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InboundOperationStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operation' => 'string',
        'operation_id' => 'string',
        'operation_problems' => '\Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\OperationProblem[]',
        'operation_status' => '\Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\OperationStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operation' => null,
        'operation_id' => null,
        'operation_problems' => null,
        'operation_status' => null
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
        'operation' => 'operation',
        'operation_id' => 'operationId',
        'operation_problems' => 'operationProblems',
        'operation_status' => 'operationStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operation' => 'setOperation',
        'operation_id' => 'setOperationId',
        'operation_problems' => 'setOperationProblems',
        'operation_status' => 'setOperationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operation' => 'getOperation',
        'operation_id' => 'getOperationId',
        'operation_problems' => 'getOperationProblems',
        'operation_status' => 'getOperationStatus'
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['operation_id'] = isset($data['operation_id']) ? $data['operation_id'] : null;
        $this->container['operation_problems'] = isset($data['operation_problems']) ? $data['operation_problems'] : null;
        $this->container['operation_status'] = isset($data['operation_status']) ? $data['operation_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
        if ($this->container['operation_id'] === null) {
            $invalidProperties[] = "'operation_id' can't be null";
        }
        if ($this->container['operation_problems'] === null) {
            $invalidProperties[] = "'operation_problems' can't be null";
        }
        if ($this->container['operation_status'] === null) {
            $invalidProperties[] = "'operation_status' can't be null";
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
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation The name of the operation in the asynchronous API call.
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets operation_id
     *
     * @return string
     */
    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     *
     * @param string $operation_id The operation ID returned by the asynchronous API call.
     *
     * @return $this
     */
    public function setOperationId($operation_id)
    {
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets operation_problems
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\OperationProblem[]
     */
    public function getOperationProblems()
    {
        return $this->container['operation_problems'];
    }

    /**
     * Sets operation_problems
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\OperationProblem[] $operation_problems The problems in the processing of the asynchronous operation.
     *
     * @return $this
     */
    public function setOperationProblems($operation_problems)
    {
        $this->container['operation_problems'] = $operation_problems;

        return $this;
    }

    /**
     * Gets operation_status
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\OperationStatus
     */
    public function getOperationStatus()
    {
        return $this->container['operation_status'];
    }

    /**
     * Sets operation_status
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound\OperationStatus $operation_status operation_status
     *
     * @return $this
     */
    public function setOperationStatus($operation_status)
    {
        $this->container['operation_status'] = $operation_status;

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
