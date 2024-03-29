<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getCoupons($data = array())
 * @method ApiResponse getTotalCoupons($data = array())
 */
class AdminModelExtensionReportCoupon extends BaseModel
{
    const MODEL_NAME = 'extension/report/coupon';
    const IS_ADMIN = true;
}

