<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getOrderRecurring($order_recurring_id)
 * @method ApiResponse getOrderRecurrings($start = 0, $limit = 20)
 * @method ApiResponse getOrderRecurringByReference($reference)
 * @method ApiResponse getOrderRecurringTransactions($order_recurring_id)
 * @method ApiResponse getTotalOrderRecurrings()
 * @method ApiResponse addOrderRecurringTransaction($order_recurring_id, $type)
 * @method ApiResponse editOrderRecurringStatus($order_recurring_id, $status)
 */
class ModelAccountRecurring extends BaseModel
{
    const MODEL_NAME = 'account/recurring';
    
}

