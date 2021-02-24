<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addDownload($data)
 * @method ApiResponse editDownload($download_id, $data)
 * @method ApiResponse deleteDownload($download_id)
 * @method ApiResponse getDownload($download_id)
 * @method ApiResponse getDownloads($data = array())
 * @method ApiResponse getDownloadDescriptions($download_id)
 * @method ApiResponse getTotalDownloads()
 */
class AdminModelCatalogDownload extends BaseModel
{
    const MODEL_NAME = 'catalog/download';
    const IS_ADMIN = true;
}

