<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getCommission($data = array())
 * @method ApiResponse getTotalCommission($data = array())
 * @method ApiResponse getProducts($data = array())
 * @method ApiResponse getTotalProducts($data = array())
 * @method ApiResponse getAffiliateActivities($data = array())
 * @method ApiResponse getTotalAffiliateActivities($data = array())
 */
class AdminModelReportAffiliate extends BaseModel
{
    const MODEL_NAME = 'report/affiliate';
    
}

