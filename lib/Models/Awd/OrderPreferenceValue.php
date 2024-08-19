<?php
/**
 * OrderPreferenceValue
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
 * OrderPreferenceValue Class Doc Comment
 *
 * @category Class
 * @description Value for the order preference.
 */
class OrderPreferenceValue
{
    /**
     * Possible values of this enum
     */
    const SET = 'SET';
    const _UNSET = 'UNSET';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SET,
            self::_UNSET,
        ];
    }
}
