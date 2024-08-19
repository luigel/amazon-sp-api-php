<?php
/**
 * CarrierCodeType
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
 * CarrierCodeType Class Doc Comment
 *
 * @category Class
 * @description Denotes the type for the carrier.
 */
class CarrierCodeType
{
    /**
     * Possible values of this enum
     */
    const SCAC = 'SCAC';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SCAC
        ];
    }
}
