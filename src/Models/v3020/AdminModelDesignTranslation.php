<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addTranslation($data)
 * @method ApiResponse editTranslation($translation_id, $data)
 * @method ApiResponse deleteTranslation($translation_id)
 * @method ApiResponse getTranslation($translation_id)
 * @method ApiResponse getTranslations($data = array())
 * @method ApiResponse getTotalTranslations()
 */
class AdminModelDesignTranslation extends BaseModel
{
    const MODEL_NAME = 'design/translation';
    const IS_ADMIN = true;
}

