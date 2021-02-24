<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse getTotalCaptured($cardconnect_order_id)
 * @method ApiResponse inquire($order_info, $retref)
 * @method ApiResponse capture($order_info, $amount)
 * @method ApiResponse refund($order_info, $amount)
 * @method ApiResponse void($order_info, $retref)
 * @method ApiResponse updateTransactionStatusByRetref($retref, $status)
 * @method ApiResponse addTransaction($cardconnect_order_id, $type, $retref, $amount, $status)
 * @method ApiResponse log($data)
 */
class AdminModelExtensionPaymentCardconnect extends BaseModel
{
    const MODEL_NAME = 'extension/payment/cardconnect';
    
}

