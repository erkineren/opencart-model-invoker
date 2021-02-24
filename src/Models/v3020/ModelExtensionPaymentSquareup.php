<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse addTransaction($transaction, $merchant_id, $address, $order_id, $user_agent, $ip)
 * @method ApiResponse tokenExpiredEmail()
 * @method ApiResponse tokenRevokedEmail()
 * @method ApiResponse cronEmail($result)
 * @method ApiResponse recurringPayments()
 * @method ApiResponse createRecurring($recurring, $order_id, $description, $reference)
 * @method ApiResponse validateCRON()
 * @method ApiResponse updateToken()
 * @method ApiResponse nextRecurringPayments()
 * @method ApiResponse addRecurringTransaction($order_recurring_id, $reference, $amount, $status)
 * @method ApiResponse updateRecurringExpired($order_recurring_id)
 * @method ApiResponse updateRecurringTrial($order_recurring_id)
 * @method ApiResponse suspendRecurringProfile($order_recurring_id)
 */
class ModelExtensionPaymentSquareup extends BaseModel
{
    const MODEL_NAME = 'extension/payment/squareup';
    
}

