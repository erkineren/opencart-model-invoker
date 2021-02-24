<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addBanner($data)
 * @method ApiResponse editBanner($banner_id, $data)
 * @method ApiResponse deleteBanner($banner_id)
 * @method ApiResponse getBanner($banner_id)
 * @method ApiResponse getBanners($data = array())
 * @method ApiResponse getBannerImages($banner_id)
 * @method ApiResponse getTotalBanners()
 */
class AdminModelDesignBanner extends BaseModel
{
    const MODEL_NAME = 'design/banner';
    const IS_ADMIN = true;
}

