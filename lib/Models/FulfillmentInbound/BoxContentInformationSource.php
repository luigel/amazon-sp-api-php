<?php
/**
 * BoxContentInformationSource
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * OpenAPI spec version: 2024-03-20
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.61
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Luigel\AmazonSellingPartnerAPI\Models\FulfillmentInbound;
use Luigel\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * BoxContentInformationSource Class Doc Comment
 *
 * @category Class
 * @description Indication of how box content is meant to be provided.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BoxContentInformationSource
{
    /**
     * Possible values of this enum
     */
    const BOX_CONTENT_PROVIDED = 'BOX_CONTENT_PROVIDED';
    const MANUAL_PROCESS = 'MANUAL_PROCESS';
    const BARCODE_2_D = 'BARCODE_2D';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOX_CONTENT_PROVIDED
            self::MANUAL_PROCESS
            self::BARCODE_2_D
        ];
    }
}
