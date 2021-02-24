<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addLayout($data)
 * @method ApiResponse editLayout($layout_id, $data)
 * @method ApiResponse deleteLayout($layout_id)
 * @method ApiResponse getLayout($layout_id)
 * @method ApiResponse getLayouts($data = array())
 * @method ApiResponse getLayoutRoutes($layout_id)
 * @method ApiResponse getLayoutModules($layout_id)
 * @method ApiResponse getTotalLayouts()
 */
class AdminModelDesignLayout extends BaseModel
{
    const MODEL_NAME = 'design/layout';
    const IS_ADMIN = true;
}

