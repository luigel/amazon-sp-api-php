<?php
/**
 * IneligibilityReasonCode
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
 * IneligibilityReasonCode Class Doc Comment
 *
 * @category Class
 * @description Reasons that make a shipment service offering ineligible.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IneligibilityReasonCode
{
    /**
     * Possible values of this enum
     */
    const NO_COVERAGE = 'NO_COVERAGE';
    const PICKUP_SLOT_RESTRICTION = 'PICKUP_SLOT_RESTRICTION';
    const UNSUPPORTED_VAS = 'UNSUPPORTED_VAS';
    const VAS_COMBINATION_RESTRICTION = 'VAS_COMBINATION_RESTRICTION';
    const SIZE_RESTRICTIONS = 'SIZE_RESTRICTIONS';
    const WEIGHT_RESTRICTIONS = 'WEIGHT_RESTRICTIONS';
    const LATE_DELIVERY = 'LATE_DELIVERY';
    const PROGRAM_CONSTRAINTS = 'PROGRAM_CONSTRAINTS';
    const TERMS_AND_CONDITIONS_NOT_ACCEPTED = 'TERMS_AND_CONDITIONS_NOT_ACCEPTED';
    const UNKNOWN = 'UNKNOWN';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_COVERAGE
            self::PICKUP_SLOT_RESTRICTION
            self::UNSUPPORTED_VAS
            self::VAS_COMBINATION_RESTRICTION
            self::SIZE_RESTRICTIONS
            self::WEIGHT_RESTRICTIONS
            self::LATE_DELIVERY
            self::PROGRAM_CONSTRAINTS
            self::TERMS_AND_CONDITIONS_NOT_ACCEPTED
            self::UNKNOWN
        ];
    }
}
