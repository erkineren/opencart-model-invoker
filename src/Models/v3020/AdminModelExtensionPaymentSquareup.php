<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTransaction($squareup_transaction_id)
 * @method ApiResponse getTransactions($data)
 * @method ApiResponse getTotalTransactions($data)
 * @method ApiResponse updateTransaction($squareup_transaction_id, $type, $refunds = array())
 * @method ApiResponse getOrderStatusId($order_id, $transaction_status = null)
 * @method ApiResponse editOrderRecurringStatus($order_recurring_id, $status)
 * @method ApiResponse createTables()
 * @method ApiResponse dropTables()
 */
class AdminModelExtensionPaymentSquareup extends BaseModel
{
    const MODEL_NAME = 'extension/payment/squareup';
    const IS_ADMIN = true;
}

