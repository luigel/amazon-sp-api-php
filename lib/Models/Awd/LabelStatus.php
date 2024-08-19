<?php
/**
 * LabelStatus
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
 * LabelStatus Class Doc Comment
 *
 * @category Class
 * @description The status of your label.
 */
class LabelStatus
{
    /**
     * Possible values of this enum
     */
    const GENERATING = 'GENERATING';
    const GENERATED = 'GENERATED';
    const GENERATION_FAILED = 'GENERATION_FAILED';
    const NOT_READY = 'NOT_READY';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GENERATING,
            self::GENERATED,
            self::GENERATION_FAILED,
            self::NOT_READY,
        ];
    }
}
