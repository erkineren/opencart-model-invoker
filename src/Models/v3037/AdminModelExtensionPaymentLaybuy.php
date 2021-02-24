<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addRevisedTransaction($data = array())
 * @method ApiResponse getCustomerIdByOrderId($order_id)
 * @method ApiResponse getInitialPayments()
 * @method ApiResponse getMonths()
 * @method ApiResponse getPayPalProfileIds()
 * @method ApiResponse getRevisedTransaction($id)
 * @method ApiResponse getRemainingAmount($amount, $downpayment_amount, $payment_amounts, $transaction = 2)
 * @method ApiResponse getRevisedTransactions($id)
 * @method ApiResponse getStatusLabel($id)
 * @method ApiResponse getTransaction($id)
 * @method ApiResponse getTransactions($data = array())
 * @method ApiResponse getTotalTransactions($data = array())
 * @method ApiResponse getTransactionByLayBuyRefId($laybuy_ref_id)
 * @method ApiResponse getTransactionByOrderId($order_id)
 * @method ApiResponse getTransactionStatuses()
 * @method ApiResponse install()
 * @method ApiResponse log($data, $step = 6)
 * @method ApiResponse uninstall()
 * @method ApiResponse updateOrderStatus($order_id, $order_status_id, $comment)
 * @method ApiResponse updateRevisedTransaction($id, $data = array())
 * @method ApiResponse updateTransaction($id, $status, $report, $transaction)
 * @method ApiResponse updateTransactionStatus($id, $status)
 */
class AdminModelExtensionPaymentLaybuy extends BaseModel
{
    const MODEL_NAME = 'extension/payment/laybuy';
    const IS_ADMIN = true;
}

