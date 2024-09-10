<?php
/**
 * EventCode
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
 * EventCode Class Doc Comment
 *
 * @category Class
 * @description The tracking event type.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventCode
{
    /**
     * Possible values of this enum
     */
    const READY_FOR_RECEIVE = 'ReadyForReceive';
    const PICKUP_DONE = 'PickupDone';
    const DELIVERED = 'Delivered';
    const DEPARTED = 'Departed';
    const DELIVERY_ATTEMPTED = 'DeliveryAttempted';
    const LOST = 'Lost';
    const OUT_FOR_DELIVERY = 'OutForDelivery';
    const ARRIVED_AT_CARRIER_FACILITY = 'ArrivedAtCarrierFacility';
    const REJECTED = 'Rejected';
    const UNDELIVERABLE = 'Undeliverable';
    const PICKUP_CANCELLED = 'PickupCancelled';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::READY_FOR_RECEIVE
            self::PICKUP_DONE
            self::DELIVERED
            self::DEPARTED
            self::DELIVERY_ATTEMPTED
            self::LOST
            self::OUT_FOR_DELIVERY
            self::ARRIVED_AT_CARRIER_FACILITY
            self::REJECTED
            self::UNDELIVERABLE
            self::PICKUP_CANCELLED
        ];
    }
}
