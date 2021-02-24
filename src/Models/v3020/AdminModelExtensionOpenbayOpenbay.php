<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse patch()
 * @method ApiResponse updateTest()
 * @method ApiResponse updateCheckVersion($beta = 0)
 * @method ApiResponse updateDownload($beta = 0)
 * @method ApiResponse updateExtract()
 * @method ApiResponse updateRemove($beta = 0)
 * @method ApiResponse updateUpdateVersion($beta = 0)
 * @method ApiResponse setUrl($url)
 * @method ApiResponse getNotifications()
 * @method ApiResponse version()
 * @method ApiResponse faqGet($route)
 * @method ApiResponse faqIsDismissed($route)
 * @method ApiResponse faqDismiss($route)
 * @method ApiResponse faqClear()
 * @method ApiResponse faqDbTableCheck()
 * @method ApiResponse requirementTest()
 * @method ApiResponse getTotalProducts($data = array())
 * @method ApiResponse getProducts($data = array())
 * @method ApiResponse addOrderHistory($order_id, $data, $api_login)
 * @method ApiResponse apiLogin($key)
 * @method ApiResponse storeImage($filename, $width, $height, $sub_directory = '')
 */
class AdminModelExtensionOpenbayOpenbay extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/openbay';
    
}

