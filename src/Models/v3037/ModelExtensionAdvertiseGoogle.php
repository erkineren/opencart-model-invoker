<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getHumanReadableCategory($product_id, $store_id)
 * @method ApiResponse getHumanReadableOpenCartCategory($category_id)
 * @method ApiResponse getSizeAndColorOptionMap($product_id, $store_id)
 * @method ApiResponse getCoupon($order_id)
 * @method ApiResponse getRemarketingProductIds($products, $store_id)
 * @method ApiResponse getRemarketingItems($products, $store_id)
 */
class ModelExtensionAdvertiseGoogle extends BaseModel
{
    const MODEL_NAME = 'extension/advertise/google';
    
}

