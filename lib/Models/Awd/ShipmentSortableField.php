<?php
/**
 * ShipmentSortableField
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
 * ShipmentSortableField Class Doc Comment
 *
 * @category Class
 * @description Denotes the field name on which the shipments are to be sorted.
 */
class ShipmentSortableField
{
    /**
     * Possible values of this enum
     */
    const UPDATED_AT = 'UPDATED_AT';
    const CREATED_AT = 'CREATED_AT';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UPDATED_AT,
            self::CREATED_AT,
        ];
    }
}
