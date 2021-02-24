<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getSetting($code, $store_id = 0)
 * @method ApiResponse editSetting($code, $data, $store_id = 0)
 * @method ApiResponse deleteSetting($code, $store_id = 0)
 * @method ApiResponse getSettingValue($key, $store_id = 0)
 * @method ApiResponse editSettingValue($code = '', $key = '', $value = '', $store_id = 0)
 */
class AdminModelSettingSetting extends BaseModel
{
    const MODEL_NAME = 'setting/setting';
    
}

