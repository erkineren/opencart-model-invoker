<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addCoupon($data)
 * @method ApiResponse editCoupon($coupon_id, $data)
 * @method ApiResponse deleteCoupon($coupon_id)
 * @method ApiResponse getCoupon($coupon_id)
 * @method ApiResponse getCouponByCode($code)
 * @method ApiResponse getCoupons($data = array())
 * @method ApiResponse getCouponProducts($coupon_id)
 * @method ApiResponse getCouponCategories($coupon_id)
 * @method ApiResponse getTotalCoupons()
 * @method ApiResponse getCouponHistories($coupon_id, $start = 0, $limit = 10)
 * @method ApiResponse getTotalCouponHistories($coupon_id)
 */
class AdminModelMarketingCoupon extends BaseModel
{
    const MODEL_NAME = 'marketing/coupon';
    const IS_ADMIN = true;
}

