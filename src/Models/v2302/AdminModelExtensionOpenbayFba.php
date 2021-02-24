<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse patch()
 * @method ApiResponse countFbaOrders()
 */
class AdminModelExtensionOpenbayFba extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/fba';
    const IS_ADMIN = true;
}

