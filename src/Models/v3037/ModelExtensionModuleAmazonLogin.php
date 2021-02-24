<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse fetchProfile($access_token)
 * @method ApiResponse verifyAccessToken($access_token)
 * @method ApiResponse loginProfile($amazon_profile)
 * @method ApiResponse persistAddress($address)
 * @method ApiResponse addressMatches($new, $addresses)
 * @method ApiResponse addressMatch($a1, $a2, $keys)
 * @method ApiResponse forceLoginCustomer($customer_info)
 * @method ApiResponse getApiDomainName()
 * @method ApiResponse curlGet($url, $headers = array())
 * @method ApiResponse debugLog($type, $data)
 */
class ModelExtensionModuleAmazonLogin extends BaseModel
{
    const MODEL_NAME = 'extension/module/amazon_login';
    
}

