<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addModification($data)
 * @method ApiResponse deleteModification($modification_id)
 * @method ApiResponse enableModification($modification_id)
 * @method ApiResponse disableModification($modification_id)
 * @method ApiResponse getModification($modification_id)
 * @method ApiResponse getModifications($data = array())
 * @method ApiResponse getTotalModifications()
 * @method ApiResponse getModificationByCode($code)
 */
class AdminModelExtensionModification extends BaseModel
{
    const MODEL_NAME = 'extension/modification';
    const IS_ADMIN = true;
}

