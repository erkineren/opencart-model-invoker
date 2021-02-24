<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse editTheme($store_id, $theme, $route, $code)
 * @method ApiResponse deleteTheme($store_id, $theme, $route)
 * @method ApiResponse getTheme($store_id, $theme, $route)
 */
class AdminModelDesignTheme extends BaseModel
{
    const MODEL_NAME = 'design/theme';
    
}

