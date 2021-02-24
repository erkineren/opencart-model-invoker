<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getReturns($data = array())
 * @method ApiResponse getTotalReturns($data = array())
 */
class AdminModelReportReturn extends BaseModel
{
    const MODEL_NAME = 'report/return';
    const IS_ADMIN = true;
}

