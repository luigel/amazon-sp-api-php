<?php
/**
 * ReasonComment
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
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ReasonComment Class Doc Comment
 *
 * @category Class
 * @description Reason for cancelling or rescheduling a self-ship appointment.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReasonComment
{
    /**
     * Possible values of this enum
     */
    const APPOINTMENT_REQUESTED_BY_MISTAKE = 'APPOINTMENT_REQUESTED_BY_MISTAKE';
    const VEHICLE_DELAY = 'VEHICLE_DELAY';
    const SLOT_NOT_SUITABLE = 'SLOT_NOT_SUITABLE';
    const OUTSIDE_CARRIER_BUSINESS_HOURS = 'OUTSIDE_CARRIER_BUSINESS_HOURS';
    const UNFAVOURABLE_EXTERNAL_CONDITIONS = 'UNFAVOURABLE_EXTERNAL_CONDITIONS';
    const PROCUREMENT_DELAY = 'PROCUREMENT_DELAY';
    const SHIPPING_PLAN_CHANGED = 'SHIPPING_PLAN_CHANGED';
    const INCREASED_QUANTITY = 'INCREASED_QUANTITY';
    const OTHER = 'OTHER';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPOINTMENT_REQUESTED_BY_MISTAKE
            self::VEHICLE_DELAY
            self::SLOT_NOT_SUITABLE
            self::OUTSIDE_CARRIER_BUSINESS_HOURS
            self::UNFAVOURABLE_EXTERNAL_CONDITIONS
            self::PROCUREMENT_DELAY
            self::SHIPPING_PLAN_CHANGED
            self::INCREASED_QUANTITY
            self::OTHER
        ];
    }
}
