<?php
/**
 * InventoryUnitOfMeasurement
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
 * InventoryUnitOfMeasurement Class Doc Comment
 *
 * @category Class
 * @description Unit of measurement for the inventory.
 */
class InventoryUnitOfMeasurement
{
    /**
     * Possible values of this enum
     */
    const PRODUCT_UNITS = 'PRODUCT_UNITS';
    const CASES = 'CASES';
    const PALLETS = 'PALLETS';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRODUCT_UNITS,
            self::CASES,
            self::PALLETS,
        ];
    }
}
