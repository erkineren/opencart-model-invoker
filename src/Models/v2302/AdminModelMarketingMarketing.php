<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addMarketing($data)
 * @method ApiResponse editMarketing($marketing_id, $data)
 * @method ApiResponse deleteMarketing($marketing_id)
 * @method ApiResponse getMarketing($marketing_id)
 * @method ApiResponse getMarketingByCode($code)
 * @method ApiResponse getMarketings($data = array())
 * @method ApiResponse getTotalMarketings($data = array())
 */
class AdminModelMarketingMarketing extends BaseModel
{
    const MODEL_NAME = 'marketing/marketing';
    
}

