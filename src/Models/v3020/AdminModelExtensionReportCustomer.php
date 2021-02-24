<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTotalCustomersByDay()
 * @method ApiResponse getTotalCustomersByWeek()
 * @method ApiResponse getTotalCustomersByMonth()
 * @method ApiResponse getTotalCustomersByYear()
 * @method ApiResponse getOrders($data = array())
 * @method ApiResponse getTotalOrders($data = array())
 * @method ApiResponse getRewardPoints($data = array())
 * @method ApiResponse getTotalRewardPoints($data = array())
 * @method ApiResponse getCustomerActivities($data = array())
 * @method ApiResponse getTotalCustomerActivities($data = array())
 * @method ApiResponse getCustomerSearches($data = array())
 * @method ApiResponse getTotalCustomerSearches($data = array())
 */
class AdminModelExtensionReportCustomer extends BaseModel
{
    const MODEL_NAME = 'extension/report/customer';
    const IS_ADMIN = true;
}

