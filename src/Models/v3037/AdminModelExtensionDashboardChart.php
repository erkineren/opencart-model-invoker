<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTotalOrdersByDay()
 * @method ApiResponse getTotalOrdersByWeek()
 * @method ApiResponse getTotalOrdersByMonth()
 * @method ApiResponse getTotalOrdersByYear()
 * @method ApiResponse getTotalCustomersByDay()
 * @method ApiResponse getTotalCustomersByWeek()
 * @method ApiResponse getTotalCustomersByMonth()
 * @method ApiResponse getTotalCustomersByYear()
 */
class AdminModelExtensionDashboardChart extends BaseModel
{
    const MODEL_NAME = 'extension/dashboard/chart';
    const IS_ADMIN = true;
}

