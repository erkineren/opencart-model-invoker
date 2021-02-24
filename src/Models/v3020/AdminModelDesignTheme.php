<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse editTheme($store_id, $theme, $route, $code)
 * @method ApiResponse deleteTheme($theme_id)
 * @method ApiResponse getTheme($store_id, $theme, $route)
 * @method ApiResponse getThemes($start = 0, $limit = 10)
 * @method ApiResponse getTotalThemes()
 */
class AdminModelDesignTheme extends BaseModel
{
    const MODEL_NAME = 'design/theme';
    const IS_ADMIN = true;
}

