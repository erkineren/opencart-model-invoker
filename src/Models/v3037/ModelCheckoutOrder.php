<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addOrder($data)
 * @method ApiResponse editOrder($order_id, $data)
 * @method ApiResponse deleteOrder($order_id)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse getOrderProducts($order_id)
 * @method ApiResponse getOrderOptions($order_id, $order_product_id)
 * @method ApiResponse getOrderVouchers($order_id)
 * @method ApiResponse getOrderTotals($order_id)
 * @method ApiResponse addOrderHistory($order_id, $order_status_id, $comment = '', $notify = false, $override = false)
 */
class ModelCheckoutOrder extends BaseModel
{
    const MODEL_NAME = 'checkout/order';
    
}

