<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse void($order_id)
 * @method ApiResponse updateVoidStatus($firstdata_order_id, $status)
 * @method ApiResponse capture($order_id, $amount)
 * @method ApiResponse updateCaptureStatus($firstdata_order_id, $status)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($firstdata_order_id, $type, $total)
 * @method ApiResponse logger($message)
 * @method ApiResponse getTotalCaptured($firstdata_order_id)
 * @method ApiResponse mapCurrency($code)
 */
class AdminModelExtensionPaymentFirstdata extends BaseModel
{
    const MODEL_NAME = 'extension/payment/firstdata';
    
}

