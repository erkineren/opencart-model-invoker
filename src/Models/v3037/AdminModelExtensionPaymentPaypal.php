<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse configureSmartButton()
 * @method ApiResponse log($data, $title = null)
 */
class AdminModelExtensionPaymentPaypal extends BaseModel
{
    const MODEL_NAME = 'extension/payment/paypal';
    const IS_ADMIN = true;
}

