<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addUpload($name, $filename)
 * @method ApiResponse deleteUpload($upload_id)
 * @method ApiResponse getUpload($upload_id)
 * @method ApiResponse getUploadByCode($code)
 * @method ApiResponse getUploads($data = array())
 * @method ApiResponse getTotalUploads()
 */
class AdminModelToolUpload extends BaseModel
{
    const MODEL_NAME = 'tool/upload';
    const IS_ADMIN = true;
}

