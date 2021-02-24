<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getProductsViewed($data = array())
 * @method ApiResponse getTotalProductViews()
 * @method ApiResponse getTotalProductsViewed()
 * @method ApiResponse reset()
 * @method ApiResponse getPurchased($data = array())
 * @method ApiResponse getTotalPurchased($data)
 */
class AdminModelReportProduct extends BaseModel
{
    const MODEL_NAME = 'report/product';
    const IS_ADMIN = true;
}

