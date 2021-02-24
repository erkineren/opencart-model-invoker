<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getStatistics()
 * @method ApiResponse getValue($code)
 * @method ApiResponse addValue($code, $value)
 * @method ApiResponse editValue($code, $value)
 * @method ApiResponse removeValue($code, $value)
 */
class AdminModelReportStatistics extends BaseModel
{
    const MODEL_NAME = 'report/statistics';
    
}

