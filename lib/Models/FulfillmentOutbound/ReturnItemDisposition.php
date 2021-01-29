<?php
/**
 * ReturnItemDisposition.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound;

/**
 * ReturnItemDisposition Class Doc Comment.
 *
 * @category Class
 * @description The condition of the return item when received by an Amazon fulfillment center.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ReturnItemDisposition
{
    /**
     * Possible values of this enum.
     */
    const SELLABLE = 'Sellable';
    const DEFECTIVE = 'Defective';
    const CUSTOMER_DAMAGED = 'CustomerDamaged';
    const CARRIER_DAMAGED = 'CarrierDamaged';
    const FULFILLER_DAMAGED = 'FulfillerDamaged';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SELLABLE,
self::DEFECTIVE,
self::CUSTOMER_DAMAGED,
self::CARRIER_DAMAGED,
self::FULFILLER_DAMAGED,        ];
    }
}