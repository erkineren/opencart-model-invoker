<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getStatus($product_id)
 * @method ApiResponse totalLinked()
 * @method ApiResponse addLink($product_id, $etsy_item_id, $status_id = 0)
 * @method ApiResponse loadLinked($limit = 100, $page = 1)
 */
class AdminModelExtensionOpenbayEtsyProduct extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/etsy_product';
    
}

