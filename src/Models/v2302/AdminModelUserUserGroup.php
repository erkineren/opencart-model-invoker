<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addUserGroup($data)
 * @method ApiResponse editUserGroup($user_group_id, $data)
 * @method ApiResponse deleteUserGroup($user_group_id)
 * @method ApiResponse getUserGroup($user_group_id)
 * @method ApiResponse getUserGroups($data = array())
 * @method ApiResponse getTotalUserGroups()
 * @method ApiResponse addPermission($user_group_id, $type, $route)
 * @method ApiResponse removePermission($user_group_id, $type, $route)
 */
class AdminModelUserUserGroup extends BaseModel
{
    const MODEL_NAME = 'user/user_group';
    
}

