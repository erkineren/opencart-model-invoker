<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addModule($code, $data)
 * @method ApiResponse editModule($module_id, $data)
 * @method ApiResponse deleteModule($module_id)
 * @method ApiResponse getModule($module_id)
 * @method ApiResponse getModules()
 * @method ApiResponse getModulesByCode($code)
 * @method ApiResponse deleteModulesByCode($code)
 */
class AdminModelSettingModule extends BaseModel
{
    const MODEL_NAME = 'setting/module';
    
}

