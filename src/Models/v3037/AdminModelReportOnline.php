<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getOnline($data = array())
 * @method ApiResponse getTotalOnline($data = array())
 */
class AdminModelReportOnline extends BaseModel
{
    const MODEL_NAME = 'report/online';
    const IS_ADMIN = true;
}

