<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse inbound($orders)
 * @method ApiResponse updateOrderStatus($order_id, $status_id)
 * @method ApiResponse updatePaid($order_id, $status)
 * @method ApiResponse updateShipped($order_id, $status)
 * @method ApiResponse modifyStock($product_id, $qty, $symbol = '-')
 * @method ApiResponse addOrderHistory($order_id)
 */
class ModelExtensionOpenbayEtsyOrder extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/etsy_order';
    
}

