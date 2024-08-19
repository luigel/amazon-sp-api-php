<?php
/**
 * DistributionPackageType
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
 * DistributionPackageType Class Doc Comment
 *
 * @category Class
 * @description Type of distribution packages.
 */
class DistributionPackageType
{
    /**
     * Possible values of this enum
     */
    const _CASE = 'CASE';
    const PALLET = 'PALLET';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_CASE,
            self::PALLET,
        ];
    }
}
