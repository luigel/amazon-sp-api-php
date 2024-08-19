<?php
/**
 * OrderPreference
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
 * OrderPreference Class Doc Comment
 *
 * @category Class
 * @description Supported preferences for the distribution order.
 */
class OrderPreference
{
    /**
     * Possible values of this enum
     */
    const PARTIAL_ORDER = 'PARTIAL_ORDER';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PARTIAL_ORDER
        ];
    }
}
