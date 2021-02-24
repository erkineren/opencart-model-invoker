<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addModification($data)
 * @method ApiResponse deleteModification($modification_id)
 * @method ApiResponse deleteModificationsByExtensionInstallId($extension_install_id)
 * @method ApiResponse enableModification($modification_id)
 * @method ApiResponse disableModification($modification_id)
 * @method ApiResponse getModification($modification_id)
 * @method ApiResponse getModifications($data = array())
 * @method ApiResponse getTotalModifications()
 * @method ApiResponse getModificationByCode($code)
 */
class AdminModelSettingModification extends BaseModel
{
    const MODEL_NAME = 'setting/modification';
    
}

