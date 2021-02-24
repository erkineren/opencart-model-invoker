<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addTransaction($data = array(), $status)
 * @method ApiResponse deleteRevisedTransaction($id)
 * @method ApiResponse deleteTransactionByOrderId($order_id)
 * @method ApiResponse getInitialPayments()
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getMonths()
 * @method ApiResponse getPayPalProfileIds()
 * @method ApiResponse getRevisedTransaction($id)
 * @method ApiResponse getTransaction($id)
 * @method ApiResponse getTransactionByLayBuyRefId($laybuy_ref_id)
 * @method ApiResponse log($data, $step = 6)
 * @method ApiResponse prepareTransactionReport($post_data)
 * @method ApiResponse updateCronRunTime()
 * @method ApiResponse updateTransaction($id, $status, $report, $transaction)
 */
class ModelExtensionPaymentLaybuy extends BaseModel
{
    const MODEL_NAME = 'extension/payment/laybuy';
    
}

