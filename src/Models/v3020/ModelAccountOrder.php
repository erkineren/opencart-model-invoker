<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse getOrders($start = 0, $limit = 20)
 * @method ApiResponse getOrderProduct($order_id, $order_product_id)
 * @method ApiResponse getOrderProducts($order_id)
 * @method ApiResponse getOrderOptions($order_id, $order_product_id)
 * @method ApiResponse getOrderVouchers($order_id)
 * @method ApiResponse getOrderTotals($order_id)
 * @method ApiResponse getOrderHistories($order_id)
 * @method ApiResponse getTotalOrders()
 * @method ApiResponse getTotalOrderProductsByOrderId($order_id)
 * @method ApiResponse getTotalOrderVouchersByOrderId($order_id)
 */
class ModelAccountOrder extends BaseModel
{
    const MODEL_NAME = 'account/order';
    
}

