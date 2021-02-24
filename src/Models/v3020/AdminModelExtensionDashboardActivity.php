<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getActivities()
 */
class AdminModelExtensionDashboardActivity extends BaseModel
{
    const MODEL_NAME = 'extension/dashboard/activity';
    const IS_ADMIN = true;
}

