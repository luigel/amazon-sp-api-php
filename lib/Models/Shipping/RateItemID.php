<?php
/**
 * RateItemID
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
 * RateItemID Class Doc Comment
 *
 * @category Class
 * @description Unique ID for the rateItem.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RateItemID
{
    /**
     * Possible values of this enum
     */
    const BASE_RATE = 'BASE_RATE';
    const TRANSACTION_FEE = 'TRANSACTION_FEE';
    const ADULT_SIGNATURE_CONFIRMATION = 'ADULT_SIGNATURE_CONFIRMATION';
    const SIGNATURE_CONFIRMATION = 'SIGNATURE_CONFIRMATION';
    const NO_CONFIRMATION = 'NO_CONFIRMATION';
    const WAIVE_SIGNATURE = 'WAIVE_SIGNATURE';
    const IMPLIED_LIABILITY = 'IMPLIED_LIABILITY';
    const HIDDEN_POSTAGE = 'HIDDEN_POSTAGE';
    const DECLARED_VALUE = 'DECLARED_VALUE';
    const SUNDAY_HOLIDAY_DELIVERY = 'SUNDAY_HOLIDAY_DELIVERY';
    const DELIVERY_CONFIRMATION = 'DELIVERY_CONFIRMATION';
    const IMPORT_DUTY_CHARGE = 'IMPORT_DUTY_CHARGE';
    const VAT = 'VAT';
    const NO_SATURDAY_DELIVERY = 'NO_SATURDAY_DELIVERY';
    const INSURANCE = 'INSURANCE';
    const COD = 'COD';
    const FUEL_SURCHARGE = 'FUEL_SURCHARGE';
    const INSPECTION_CHARGE = 'INSPECTION_CHARGE';
    const DELIVERY_AREA_SURCHARGE = 'DELIVERY_AREA_SURCHARGE';
    const WAYBILL_CHARGE = 'WAYBILL_CHARGE';
    const AMAZON_SPONSORED_DISCOUNT = 'AMAZON_SPONSORED_DISCOUNT';
    const INTEGRATOR_SPONSORED_DISCOUNT = 'INTEGRATOR_SPONSORED_DISCOUNT';
    const OVERSIZE_SURCHARGE = 'OVERSIZE_SURCHARGE';
    const CONGESTION_CHARGE = 'CONGESTION_CHARGE';
    const RESIDENTIAL_SURCHARGE = 'RESIDENTIAL_SURCHARGE';
    const ADDITIONAL_SURCHARGE = 'ADDITIONAL_SURCHARGE';
    const SURCHARGE = 'SURCHARGE';
    const REBATE = 'REBATE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BASE_RATE
            self::TRANSACTION_FEE
            self::ADULT_SIGNATURE_CONFIRMATION
            self::SIGNATURE_CONFIRMATION
            self::NO_CONFIRMATION
            self::WAIVE_SIGNATURE
            self::IMPLIED_LIABILITY
            self::HIDDEN_POSTAGE
            self::DECLARED_VALUE
            self::SUNDAY_HOLIDAY_DELIVERY
            self::DELIVERY_CONFIRMATION
            self::IMPORT_DUTY_CHARGE
            self::VAT
            self::NO_SATURDAY_DELIVERY
            self::INSURANCE
            self::COD
            self::FUEL_SURCHARGE
            self::INSPECTION_CHARGE
            self::DELIVERY_AREA_SURCHARGE
            self::WAYBILL_CHARGE
            self::AMAZON_SPONSORED_DISCOUNT
            self::INTEGRATOR_SPONSORED_DISCOUNT
            self::OVERSIZE_SURCHARGE
            self::CONGESTION_CHARGE
            self::RESIDENTIAL_SURCHARGE
            self::ADDITIONAL_SURCHARGE
            self::SURCHARGE
            self::REBATE
        ];
    }
}
