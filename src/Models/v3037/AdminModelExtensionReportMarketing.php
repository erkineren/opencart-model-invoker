<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMarketing($data = array())
 * @method ApiResponse getTotalMarketing($data = array())
 */
class AdminModelExtensionReportMarketing extends BaseModel
{
    const MODEL_NAME = 'extension/report/marketing';
    const IS_ADMIN = true;
}

