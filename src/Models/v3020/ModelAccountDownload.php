<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getDownload($download_id)
 * @method ApiResponse getDownloads($start = 0, $limit = 20)
 * @method ApiResponse getTotalDownloads()
 */
class ModelAccountDownload extends BaseModel
{
    const MODEL_NAME = 'account/download';
    
}

