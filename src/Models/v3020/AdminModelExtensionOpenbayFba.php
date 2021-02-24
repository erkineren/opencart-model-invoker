<?php

namespace OpencartApi\Models\v3020;


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
    
}
