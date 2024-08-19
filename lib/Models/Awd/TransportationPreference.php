<?php
/**
 * TransportationPreference
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
 * TransportationPreference Class Doc Comment
 *
 * @category Class
 * @description Represents the transportation preference for an AWD shipment.
 */
class TransportationPreference
{
    /**
     * Possible values of this enum
     */
    const AMAZON_MANAGED = 'AMAZON_MANAGED';
    const SELLER_MANAGED = 'SELLER_MANAGED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON_MANAGED,
            self::SELLER_MANAGED,
        ];
    }
}
