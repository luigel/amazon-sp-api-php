<?php
/**
 * Account.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus
 */

/**
 * Selling Partner API for Sellers.
 *
 * The Selling Partner API for Sellers lets you retrieve information on behalf of sellers about their seller account, such as the marketplaces they participate in. Along with listing the marketplaces that a seller can sell in, the API also provides additional information about the marketplace such as the default language and the default currency. The API also provides seller-specific information such as whether the seller has suspended listings in that marketplace.
 *
 * OpenAPI spec version: v1
 */

namespace Luigel\AmazonSellingPartnerAPI\Models\Sellers;

use ArrayAccess;
use Luigel\AmazonSellingPartnerAPI\Models\ModelInterface;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Account Class Doc Comment.
 *
 * @description The response schema for the getAccount operation.
 *
 * @author   Stefan Neuhaus
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Account';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_participation_list' => '\Luigel\AmazonSellingPartnerAPI\Models\Sellers\MarketplaceParticipationList',
        'business_type' => 'string',
        'selling_plan' => 'string',
        'business' => '\Luigel\AmazonSellingPartnerAPI\Models\Sellers\Business',
        'primary_contact' => '\Luigel\AmazonSellingPartnerAPI\Models\Sellers\PrimaryContact',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_participation_list' => null,
        'business_type' => null,
        'selling_plan' => null,
        'business' => null,
        'primary_contact' => null,
    ];

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
        'marketplace_participation_list' => 'marketplaceParticipationList',
        'business_type' => 'businessType',
        'selling_plan' => 'sellingPlan',
        'business' => 'business',
        'primary_contact' => 'primaryContact',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_participation_list' => 'setMarketplaceParticipationList',
        'business_type' => 'setBusinessType',
        'selling_plan' => 'setSellingPlan',
        'business' => 'setBusiness',
        'primary_contact' => 'setPrimaryContact',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_participation_list' => 'getMarketplaceParticipationList',
        'business_type' => 'getBusinessType',
        'selling_plan' => 'getSellingPlan',
        'business' => 'getBusiness',
        'primary_contact' => 'getPrimaryContact',
    ];

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

    const BUSINESS_TYPE_CHARITY = 'CHARITY';
    const BUSINESS_TYPE_CRAFTSMAN = 'CRAFTSMAN';
    const BUSINESS_TYPE_NATURAL_PERSON_COMPANY = 'NATURAL_PERSON_COMPANY';
    const BUSINESS_TYPE_PUBLIC_LISTED = 'PUBLIC_LISTED';
    const BUSINESS_TYPE_PRIVATE_LIMITED = 'PRIVATE_LIMITED';
    const BUSINESS_TYPE_SOLE_PROPRIETORSHIP = 'SOLE_PROPRIETORSHIP';
    const BUSINESS_TYPE_STATE_OWNED = 'STATE_OWNED';
    const BUSINESS_TYPE_INDIVIDUAL = 'INDIVIDUAL';
    const SELLING_PLAN_PROFESSIONAL = 'PROFESSIONAL';
    const SELLING_PLAN_INDIVIDUAL = 'INDIVIDUAL';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getBusinessTypeAllowableValues()
    {
        return [
            self::BUSINESS_TYPE_CHARITY,
            self::BUSINESS_TYPE_CRAFTSMAN,
            self::BUSINESS_TYPE_NATURAL_PERSON_COMPANY,
            self::BUSINESS_TYPE_PUBLIC_LISTED,
            self::BUSINESS_TYPE_PRIVATE_LIMITED,
            self::BUSINESS_TYPE_SOLE_PROPRIETORSHIP,
            self::BUSINESS_TYPE_STATE_OWNED,
            self::BUSINESS_TYPE_INDIVIDUAL,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getSellingPlanAllowableValues()
    {
        return [
            self::SELLING_PLAN_PROFESSIONAL,
            self::SELLING_PLAN_INDIVIDUAL,
        ];
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
        $this->container['marketplace_participation_list'] = isset($data['marketplace_participation_list']) ? $data['marketplace_participation_list'] : null;
        $this->container['business_type'] = isset($data['business_type']) ? $data['business_type'] : null;
        $this->container['selling_plan'] = isset($data['selling_plan']) ? $data['selling_plan'] : null;
        $this->container['business'] = isset($data['business']) ? $data['business'] : null;
        $this->container['primary_contact'] = isset($data['primary_contact']) ? $data['primary_contact'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplace_participation_list'] === null) {
            $invalidProperties[] = "'marketplace_participation_list' can't be null";
        }
        if ($this->container['business_type'] === null) {
            $invalidProperties[] = "'business_type' can't be null";
        }
        $allowedValues = $this->getBusinessTypeAllowableValues();
        if (!is_null($this->container['business_type']) && !in_array($this->container['business_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'business_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        if ($this->container['selling_plan'] === null) {
            $invalidProperties[] = "'selling_plan' can't be null";
        }
        $allowedValues = $this->getSellingPlanAllowableValues();
        if (!is_null($this->container['selling_plan']) && !in_array($this->container['selling_plan'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'selling_plan', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets marketplace_participation_list.
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Sellers\MarketplaceParticipationList
     */
    public function getMarketplaceParticipationList()
    {
        return $this->container['marketplace_participation_list'];
    }

    /**
     * Sets marketplace_participation_list.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Sellers\MarketplaceParticipationList $marketplace_participation_list marketplace_participation_list
     *
     * @return $this
     */
    public function setMarketplaceParticipationList($marketplace_participation_list)
    {
        $this->container['marketplace_participation_list'] = $marketplace_participation_list;

        return $this;
    }

    /**
     * Gets business_type.
     *
     * @return string
     */
    public function getBusinessType()
    {
        return $this->container['business_type'];
    }

    /**
     * Sets business_type.
     *
     * @param string $business_type The type of business registered for the seller account.
     *
     * @return $this
     */
    public function setBusinessType($business_type)
    {
        $allowedValues = $this->getBusinessTypeAllowableValues();
        if (!in_array($business_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'business_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['business_type'] = $business_type;

        return $this;
    }

    /**
     * Gets selling_plan.
     *
     * @return string
     */
    public function getSellingPlan()
    {
        return $this->container['selling_plan'];
    }

    /**
     * Sets selling_plan.
     *
     * @param string $selling_plan The selling plan details.
     *
     * @return $this
     */
    public function setSellingPlan($selling_plan)
    {
        $allowedValues = $this->getSellingPlanAllowableValues();
        if (!in_array($selling_plan, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'selling_plan', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['selling_plan'] = $selling_plan;

        return $this;
    }

    /**
     * Gets business.
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Sellers\Business
     */
    public function getBusiness()
    {
        return $this->container['business'];
    }

    /**
     * Sets business.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Sellers\Business $business business
     *
     * @return $this
     */
    public function setBusiness($business)
    {
        $this->container['business'] = $business;

        return $this;
    }

    /**
     * Gets primary_contact.
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Sellers\PrimaryContact
     */
    public function getPrimaryContact()
    {
        return $this->container['primary_contact'];
    }

    /**
     * Sets primary_contact.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Sellers\PrimaryContact $primary_contact primary_contact
     *
     * @return $this
     */
    public function setPrimaryContact($primary_contact)
    {
        $this->container['primary_contact'] = $primary_contact;

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
