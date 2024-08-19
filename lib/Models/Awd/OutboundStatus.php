<?php
/**
 * OutboundStatus
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
 * OutboundStatus Class Doc Comment
 *
 * @category Class
 * @description Statuses supported for an outbound order.
 */
class OutboundStatus
{
    /**
     * Possible values of this enum
     */
    const CONFIRMED = 'CONFIRMED';
    const DRAFT = 'DRAFT';
    const ELIGIBLE = 'ELIGIBLE';
    const EXECUTING = 'EXECUTING';
    const FAILURE = 'FAILURE';
    const INELIGIBLE = 'INELIGIBLE';
    const INVENTORY_OUTBOUND = 'INVENTORY_OUTBOUND';
    const SUCCESS = 'SUCCESS';
    const VALIDATING = 'VALIDATING';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONFIRMED,
            self::DRAFT,
            self::ELIGIBLE,
            self::EXECUTING,
            self::FAILURE,
            self::INELIGIBLE,
            self::INVENTORY_OUTBOUND,
            self::SUCCESS,
            self::VALIDATING,
        ];
    }
}
