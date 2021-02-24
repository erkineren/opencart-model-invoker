<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse getOrder($order_id)
 */
class AdminModelExtensionFraudMaxmind extends BaseModel
{
    const MODEL_NAME = 'extension/fraud/maxmind';
    const IS_ADMIN = true;
}

