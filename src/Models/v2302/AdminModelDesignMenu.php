<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addMenu($data)
 * @method ApiResponse editMenu($menu_id, $data)
 * @method ApiResponse deleteMenu($menu_id)
 * @method ApiResponse getMenu($menu_id)
 * @method ApiResponse getMenus($data = array())
 * @method ApiResponse getMenuDescriptions($menu_id)
 * @method ApiResponse getTotalMenus()
 */
class AdminModelDesignMenu extends BaseModel
{
    const MODEL_NAME = 'design/menu';
    
}

