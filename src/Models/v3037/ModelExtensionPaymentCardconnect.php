<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getCardTypes()
 * @method ApiResponse getMonths()
 * @method ApiResponse getYears()
 * @method ApiResponse getCard($token, $customer_id)
 * @method ApiResponse getCards($customer_id)
 * @method ApiResponse addCard($cardconnect_order_id, $customer_id, $profileid, $token, $type, $account, $expiry)
 * @method ApiResponse deleteCard($token, $customer_id)
 * @method ApiResponse addOrder($order_info, $payment_method)
 * @method ApiResponse addTransaction($cardconnect_order_id, $type, $status, $order_info)
 * @method ApiResponse getSettlementStatuses($merchant_id, $date)
 * @method ApiResponse updateTransactionStatusByRetref($retref, $status)
 * @method ApiResponse updateCronRunTime()
 * @method ApiResponse log($data)
 */
class ModelExtensionPaymentCardconnect extends BaseModel
{
    const MODEL_NAME = 'extension/payment/cardconnect';
    
}

