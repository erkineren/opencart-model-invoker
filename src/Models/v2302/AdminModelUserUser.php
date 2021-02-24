<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addUser($data)
 * @method ApiResponse editUser($user_id, $data)
 * @method ApiResponse editPassword($user_id, $password)
 * @method ApiResponse editCode($email, $code)
 * @method ApiResponse deleteUser($user_id)
 * @method ApiResponse getUser($user_id)
 * @method ApiResponse getUserByUsername($username)
 * @method ApiResponse getUserByEmail($email)
 * @method ApiResponse getUserByCode($code)
 * @method ApiResponse getUsers($data = array())
 * @method ApiResponse getTotalUsers()
 * @method ApiResponse getTotalUsersByGroupId($user_group_id)
 * @method ApiResponse getTotalUsersByEmail($email)
 */
class AdminModelUserUser extends BaseModel
{
    const MODEL_NAME = 'user/user';
    const IS_ADMIN = true;
}

