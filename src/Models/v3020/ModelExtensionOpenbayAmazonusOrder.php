<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse acknowledgeOrder($order_id)
 * @method ApiResponse getProductId($sku)
 * @method ApiResponse getProductVar($sku)
 * @method ApiResponse decreaseProductQuantity($product_id, $delta, $var = '')
 * @method ApiResponse getMappedStatus($amazonus_status)
 * @method ApiResponse getCountryName($country_code)
 * @method ApiResponse getCountryId($country_code)
 * @method ApiResponse getZoneId($zone_name)
 * @method ApiResponse updateOrderStatus($order_id, $status_id)
 * @method ApiResponse addAmazonusOrder($order_id, $amazonus_order_id)
 * @method ApiResponse addAmazonusOrderProducts($order_id, $data)
 * @method ApiResponse getOrderId($amazonus_order_id)
 * @method ApiResponse getOrderStatus($order_id)
 * @method ApiResponse getAmazonusOrderId($order_id)
 * @method ApiResponse getProductOptionsByVar($product_var)
 * @method ApiResponse addOrderHistory($order_id)
 */
class ModelExtensionOpenbayAmazonusOrder extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/amazonus_order';
    
}

