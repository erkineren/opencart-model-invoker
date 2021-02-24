<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addUpload($name, $filename)
 * @method ApiResponse getUploadByCode($code)
 */
class ModelToolUpload extends BaseModel
{
    const MODEL_NAME = 'tool/upload';
    
}

