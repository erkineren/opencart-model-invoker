<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addAddress($data)
 * @method ApiResponse editAddress($address_id, $data)
 * @method ApiResponse deleteAddress($address_id)
 * @method ApiResponse getAddress($address_id)
 * @method ApiResponse getAddresses()
 * @method ApiResponse getTotalAddresses()
 */
class ModelAccountAddress extends BaseModel
{
    const MODEL_NAME = 'account/address';
    
}

