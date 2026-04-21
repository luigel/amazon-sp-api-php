<?php
/**
 * Business.
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
 * Business Class Doc Comment.
 *
 * @description Information about the seller's business. Certain fields may be omitted depending on the seller's businessType.
 *
 * @author   Stefan Neuhaus
 */
class Business implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Business';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'name' => 'string',
        'registered_business_address' => '\Luigel\AmazonSellingPartnerAPI\Models\Sellers\Address',
        'company_registration_number' => 'string',
        'company_tax_identification_number' => 'string',
        'non_latin_name' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'name' => null,
        'registered_business_address' => null,
        'company_registration_number' => null,
        'company_tax_identification_number' => null,
        'non_latin_name' => null,
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
        'name' => 'name',
        'registered_business_address' => 'registeredBusinessAddress',
        'company_registration_number' => 'companyRegistrationNumber',
        'company_tax_identification_number' => 'companyTaxIdentificationNumber',
        'non_latin_name' => 'nonLatinName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'registered_business_address' => 'setRegisteredBusinessAddress',
        'company_registration_number' => 'setCompanyRegistrationNumber',
        'company_tax_identification_number' => 'setCompanyTaxIdentificationNumber',
        'non_latin_name' => 'setNonLatinName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'registered_business_address' => 'getRegisteredBusinessAddress',
        'company_registration_number' => 'getCompanyRegistrationNumber',
        'company_tax_identification_number' => 'getCompanyTaxIdentificationNumber',
        'non_latin_name' => 'getNonLatinName',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['registered_business_address'] = isset($data['registered_business_address']) ? $data['registered_business_address'] : null;
        $this->container['company_registration_number'] = isset($data['company_registration_number']) ? $data['company_registration_number'] : null;
        $this->container['company_tax_identification_number'] = isset($data['company_tax_identification_number']) ? $data['company_tax_identification_number'] : null;
        $this->container['non_latin_name'] = isset($data['non_latin_name']) ? $data['non_latin_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['registered_business_address'] === null) {
            $invalidProperties[] = "'registered_business_address' can't be null";
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
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name The registered business name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets registered_business_address.
     *
     * @return \Luigel\AmazonSellingPartnerAPI\Models\Sellers\Address
     */
    public function getRegisteredBusinessAddress()
    {
        return $this->container['registered_business_address'];
    }

    /**
     * Sets registered_business_address.
     *
     * @param \Luigel\AmazonSellingPartnerAPI\Models\Sellers\Address $registered_business_address registered_business_address
     *
     * @return $this
     */
    public function setRegisteredBusinessAddress($registered_business_address)
    {
        $this->container['registered_business_address'] = $registered_business_address;

        return $this;
    }

    /**
     * Gets company_registration_number.
     *
     * @return string
     */
    public function getCompanyRegistrationNumber()
    {
        return $this->container['company_registration_number'];
    }

    /**
     * Sets company_registration_number.
     *
     * @param string $company_registration_number The seller's company registration number, if applicable.
     *
     * @return $this
     */
    public function setCompanyRegistrationNumber($company_registration_number)
    {
        $this->container['company_registration_number'] = $company_registration_number;

        return $this;
    }

    /**
     * Gets company_tax_identification_number.
     *
     * @return string
     */
    public function getCompanyTaxIdentificationNumber()
    {
        return $this->container['company_tax_identification_number'];
    }

    /**
     * Sets company_tax_identification_number.
     *
     * @param string $company_tax_identification_number The seller's company tax identification number, if applicable.
     *
     * @return $this
     */
    public function setCompanyTaxIdentificationNumber($company_tax_identification_number)
    {
        $this->container['company_tax_identification_number'] = $company_tax_identification_number;

        return $this;
    }

    /**
     * Gets non_latin_name.
     *
     * @return string
     */
    public function getNonLatinName()
    {
        return $this->container['non_latin_name'];
    }

    /**
     * Sets non_latin_name.
     *
     * @param string $non_latin_name The non-Latin script version of the registered business name, if applicable.
     *
     * @return $this
     */
    public function setNonLatinName($non_latin_name)
    {
        $this->container['non_latin_name'] = $non_latin_name;

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
