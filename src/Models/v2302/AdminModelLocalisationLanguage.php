<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addLanguage($data)
 * @method ApiResponse editLanguage($language_id, $data)
 * @method ApiResponse deleteLanguage($language_id)
 * @method ApiResponse getLanguage($language_id)
 * @method ApiResponse getLanguages($data = array())
 * @method ApiResponse getLanguageByCode($code)
 * @method ApiResponse getTotalLanguages()
 */
class AdminModelLocalisationLanguage extends BaseModel
{
    const MODEL_NAME = 'localisation/language';
    const IS_ADMIN = true;
}

