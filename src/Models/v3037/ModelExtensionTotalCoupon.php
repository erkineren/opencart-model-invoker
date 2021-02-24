<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getCoupon($code)
 * @method ApiResponse getTotal($total)
 * @method ApiResponse confirm($order_info, $order_total)
 * @method ApiResponse unconfirm($order_id)
 * @method ApiResponse getTotalCouponHistoriesByCoupon($coupon)
 * @method ApiResponse getTotalCouponHistoriesByCustomerId($coupon, $customer_id)
 */
class ModelExtensionTotalCoupon extends BaseModel
{
    const MODEL_NAME = 'extension/total/coupon';
    
}

