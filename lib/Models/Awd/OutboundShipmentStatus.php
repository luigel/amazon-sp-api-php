<?php
/**
 * OutboundShipmentStatus
 *
 * PHP version 5
 *
 * @category Class
 */

/**
 * The Selling Partner API for Amazon Warehousing and Distribution
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD) provides programmatic access to information about AWD shipments and inventory.
 *
 * OpenAPI spec version: 2024-05-09
 */

namespace Luigel\AmazonSellingPartnerAPI\Models\Awd;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * OutboundShipmentStatus Class Doc Comment
 *
 * @category Class
 * @description Possible shipment statuses for outbound shipments.
 */
class OutboundShipmentStatus
{
    /**
     * Possible values of this enum
     */
    const CREATED = 'CREATED';
    const IN_TRANSIT = 'IN_TRANSIT';
    const DELIVERED = 'DELIVERED';
    const RECEIVING = 'RECEIVING';
    const RECEIVED = 'RECEIVED';
    const CLOSED = 'CLOSED';
    const CANCELLED = 'CANCELLED';
    const FAILED = 'FAILED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::IN_TRANSIT,
            self::DELIVERED,
            self::RECEIVING,
            self::RECEIVED,
            self::CLOSED,
            self::CANCELLED,
            self::FAILED,
        ];
    }
}
