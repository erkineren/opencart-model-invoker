<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse import($string)
 * @method ApiResponse getGoogleBaseCategories($data = array())
 * @method ApiResponse addCategory($data)
 * @method ApiResponse deleteCategory($category_id)
 * @method ApiResponse getCategories($data = array())
 * @method ApiResponse getTotalCategories()
 */
class AdminModelExtensionFeedGoogleBase extends BaseModel
{
    const MODEL_NAME = 'extension/feed/google_base';
    const IS_ADMIN = true;
}

