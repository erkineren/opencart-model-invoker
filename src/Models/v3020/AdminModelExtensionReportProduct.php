<?php

namespace OpencartApi\Models\v3020;


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
class AdminModelExtensionReportProduct extends BaseModel
{
    const MODEL_NAME = 'extension/report/product';
    const IS_ADMIN = true;
}

