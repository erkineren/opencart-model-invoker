<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addReturn($data)
 * @method ApiResponse getReturn($return_id)
 * @method ApiResponse getReturns($start = 0, $limit = 20)
 * @method ApiResponse getTotalReturns()
 * @method ApiResponse getReturnHistories($return_id)
 */
class ModelAccountReturn extends BaseModel
{
    const MODEL_NAME = 'account/return';
    
}

