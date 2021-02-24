<?php

namespace OpencartApi\Models\v2302;


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
class AdminModelExtensionModule extends BaseModel
{
    const MODEL_NAME = 'extension/module';
    const IS_ADMIN = true;
}

