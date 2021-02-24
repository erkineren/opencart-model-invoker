<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getRecurrings($data)
 * @method ApiResponse getRecurring($order_recurring_id)
 * @method ApiResponse getRecurringTransactions($order_recurring_id)
 * @method ApiResponse getTotalRecurrings($data)
 */
class AdminModelSaleRecurring extends BaseModel
{
    const MODEL_NAME = 'sale/recurring';
    
}

