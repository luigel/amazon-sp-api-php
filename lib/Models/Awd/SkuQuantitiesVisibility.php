<?php
/**
 * SkuQuantitiesVisibility
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
 * SkuQuantitiesVisibility Class Doc Comment
 *
 * @category Class
 * @description Enum to specify if returned shipment should include SKU quantity details
 */
class SkuQuantitiesVisibility
{
    /**
     * Possible values of this enum
     */
    const SHOW = 'SHOW';
    const HIDE = 'HIDE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHOW,
            self::HIDE,
        ];
    }
}
