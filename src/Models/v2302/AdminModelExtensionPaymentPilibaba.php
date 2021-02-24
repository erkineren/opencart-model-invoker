<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse getCurrencies()
 * @method ApiResponse getWarehouses()
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse register($email, $password, $currency, $warehouse, $country, $environment)
 * @method ApiResponse updateTrackingNumber($order_id, $tracking_number, $merchant_number)
 * @method ApiResponse enablePiliExpress()
 * @method ApiResponse disablePiliExpress()
 * @method ApiResponse log($data)
 */
class AdminModelExtensionPaymentPilibaba extends BaseModel
{
    const MODEL_NAME = 'extension/payment/pilibaba';
    const IS_ADMIN = true;
}

