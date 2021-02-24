<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getCoupon($code)
 * @method ApiResponse getTotal($total)
 * @method ApiResponse confirm($order_info, $order_total)
 * @method ApiResponse unconfirm($order_id)
 */
class ModelExtensionTotalCoupon extends BaseModel
{
    const MODEL_NAME = 'extension/total/coupon';
    
}

