<?php
/**
 * VolumeUnitOfMeasurement
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
 * VolumeUnitOfMeasurement Class Doc Comment
 *
 * @category Class
 * @description Unit of measurement for the package volume.
 */
class VolumeUnitOfMeasurement
{
    /**
     * Possible values of this enum
     */
    const CU_IN = 'CU_IN';
    const CBM = 'CBM';
    const CC = 'CC';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CU_IN,
            self::CBM,
            self::CC,
        ];
    }
}
