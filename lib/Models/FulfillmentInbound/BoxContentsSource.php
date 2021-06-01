<?php
/**
 * BoxContentsSource.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / Luigel
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

/**
 * BoxContentsSource Class Doc Comment.
 *

 * @description Where the seller provided box contents information for a shipment.
 *
 * @author   Stefan Neuhaus / Luigel
 */
class BoxContentsSource
{
    /**
     * Possible values of this enum.
     */
    const NONE = 'NONE';
    const FEED = 'FEED';
    const _2_D_BARCODE = '2D_BARCODE';
    const INTERACTIVE = 'INTERACTIVE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
self::FEED,
self::_2_D_BARCODE,
self::INTERACTIVE,        ];
    }
}
