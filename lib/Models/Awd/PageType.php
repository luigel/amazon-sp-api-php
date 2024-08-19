<?php
/**
 * PageType
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
 * PageType Class Doc Comment
 *
 * @category Class
 * @description Label page type.
 */
class PageType
{
    /**
     * Possible values of this enum
     */
    const THERMAL_NONPCP = 'THERMAL_NONPCP';
    const PLAIN_PAPER = 'PLAIN_PAPER';
    const LETTER_6 = 'LETTER_6';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::THERMAL_NONPCP,
            self::PLAIN_PAPER,
            self::LETTER_6,
        ];
    }
}
