<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMarketing($data = array())
 * @method ApiResponse getTotalMarketing($data = array())
 */
class AdminModelReportMarketing extends BaseModel
{
    const MODEL_NAME = 'report/marketing';
    const IS_ADMIN = true;
}

