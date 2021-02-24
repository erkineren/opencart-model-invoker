<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse add($data)
 * @method ApiResponse edit($id, $data)
 * @method ApiResponse delete($id)
 * @method ApiResponse get($id)
 * @method ApiResponse getAll()
 */
class AdminModelExtensionOpenbayEbayTemplate extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/ebay_template';
    const IS_ADMIN = true;
}

