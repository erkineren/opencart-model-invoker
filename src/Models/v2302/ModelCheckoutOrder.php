<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addOrder($data)
 * @method ApiResponse editOrder($order_id, $data)
 * @method ApiResponse deleteOrder($order_id)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addOrderHistory($order_id, $order_status_id, $comment = '', $notify = false, $override = false)
 */
class ModelCheckoutOrder extends BaseModel
{
    const MODEL_NAME = 'checkout/order';
    
}

