<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse add($data)
 * @method ApiResponse edit($id, $data)
 * @method ApiResponse delete($id)
 * @method ApiResponse get($id)
 * @method ApiResponse getAll($type = '')
 * @method ApiResponse getTypes()
 * @method ApiResponse getDefault($type)
 */
class AdminModelExtensionOpenbayEbayProfile extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/ebay_profile';
    const IS_ADMIN = true;
}

