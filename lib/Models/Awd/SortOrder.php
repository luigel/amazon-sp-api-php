<?php
/**
 * SortOrder
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
 * SortOrder Class Doc Comment
 *
 * @category Class
 * @description Sort order for a collection of items. For example, order or shipment.
 */
class SortOrder
{
    /**
     * Possible values of this enum
     */
    const ASCENDING = 'ASCENDING';
    const DESCENDING = 'DESCENDING';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASCENDING,
            self::DESCENDING,
        ];
    }
}
