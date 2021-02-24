<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse editTranslation($store_id, $language_id, $route, $data)
 * @method ApiResponse getTranslations($store_id, $language_id, $route)
 * @method ApiResponse getTotalTranslations($store_id, $language_id, $route)
 */
class AdminModelDesignLanguage extends BaseModel
{
    const MODEL_NAME = 'design/language';
    const IS_ADMIN = true;
}

