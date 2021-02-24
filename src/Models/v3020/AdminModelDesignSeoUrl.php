<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addSeoUrl($data)
 * @method ApiResponse editSeoUrl($seo_url_id, $data)
 * @method ApiResponse deleteSeoUrl($seo_url_id)
 * @method ApiResponse getSeoUrl($seo_url_id)
 * @method ApiResponse getSeoUrls($data = array())
 * @method ApiResponse getTotalSeoUrls($data = array())
 * @method ApiResponse getSeoUrlsByKeyword($keyword)
 * @method ApiResponse getSeoUrlsByQuery($keyword)
 */
class AdminModelDesignSeoUrl extends BaseModel
{
    const MODEL_NAME = 'design/seo_url';
    const IS_ADMIN = true;
}

