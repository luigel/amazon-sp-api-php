<?php
/**
 * InboundEligibilityStatus
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
 * InboundEligibilityStatus Class Doc Comment
 *
 * @category Class
 * @description Enum denoting the package inbound eligibility.
 */
class InboundEligibilityStatus
{
    /**
     * Possible values of this enum
     */
    const ELIGIBLE = 'ELIGIBLE';
    const INELIGIBLE = 'INELIGIBLE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ELIGIBLE,
            self::INELIGIBLE,
        ];
    }
}
