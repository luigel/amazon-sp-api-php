<?php
/**
 * DocumentType
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
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * DocumentType Class Doc Comment
 *
 * @category Class
 * @description The type of shipping document.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentType
{
    /**
     * Possible values of this enum
     */
    const PACKSLIP = 'PACKSLIP';
    const LABEL = 'LABEL';
    const RECEIPT = 'RECEIPT';
    const CUSTOM_FORM = 'CUSTOM_FORM';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PACKSLIP
            self::LABEL
            self::RECEIPT
            self::CUSTOM_FORM
        ];
    }
}
