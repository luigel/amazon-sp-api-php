<?php
/**
 * PrepOwner.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInboundV0;

/**
 * PrepOwner Class Doc Comment.
 *

 * @description Indicates who will prepare the item.
 *
 * @author   Stefan Neuhaus
 */
class PrepOwner
{
    /**
     * Possible values of this enum.
     */
    const AMAZON = 'AMAZON';
    const SELLER = 'SELLER';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON,
self::SELLER,        ];
    }
}
