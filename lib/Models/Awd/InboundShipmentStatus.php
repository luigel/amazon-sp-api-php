<?php
/**
 * InboundShipmentStatus
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
 * InboundShipmentStatus Class Doc Comment
 *
 * @category Class
 * @description Possible shipment statuses used by shipments.
 */
class InboundShipmentStatus
{
    /**
     * Possible values of this enum
     */
    const CREATED = 'CREATED';
    const SHIPPED = 'SHIPPED';
    const IN_TRANSIT = 'IN_TRANSIT';
    const RECEIVING = 'RECEIVING';
    const DELIVERED = 'DELIVERED';
    const CLOSED = 'CLOSED';
    const CANCELLED = 'CANCELLED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::SHIPPED,
            self::IN_TRANSIT,
            self::RECEIVING,
            self::DELIVERED,
            self::CLOSED,
            self::CANCELLED,
        ];
    }
}
