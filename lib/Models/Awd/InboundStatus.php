<?php
/**
 * InboundStatus
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
 * InboundStatus Class Doc Comment
 *
 * @category Class
 * @description The supported statuses for an inbound order.
 */
class InboundStatus
{
    /**
     * Possible values of this enum
     */
    const DRAFT = 'DRAFT';
    const VALIDATING = 'VALIDATING';
    const CONFIRMED = 'CONFIRMED';
    const CLOSED = 'CLOSED';
    const EXPIRED = 'EXPIRED';
    const CANCELLED = 'CANCELLED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
            self::VALIDATING,
            self::CONFIRMED,
            self::CLOSED,
            self::EXPIRED,
            self::CANCELLED,
        ];
    }
}
