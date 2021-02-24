<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse patch()
 * @method ApiResponse verifyAccount()
 */
class AdminModelExtensionOpenbayEtsy extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/etsy';
    const IS_ADMIN = true;
}

