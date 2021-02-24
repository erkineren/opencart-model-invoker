<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getSetting($code, $store_id = 0)
 * @method ApiResponse getSettingValue($key, $store_id = 0)
 */
class ModelSettingSetting extends BaseModel
{
    const MODEL_NAME = 'setting/setting';
    
}

