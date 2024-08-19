<?php
/**
 * DimensionUnitOfMeasurement
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
 * DimensionUnitOfMeasurement Class Doc Comment
 *
 * @category Class
 * @description Unit of measurement for package dimensions.
 */
class DimensionUnitOfMeasurement
{
    /**
     * Possible values of this enum
     */
    const INCHES = 'INCHES';
    const CENTIMETERS = 'CENTIMETERS';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INCHES,
            self::CENTIMETERS,
        ];
    }
}
