<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse patch()
 * @method ApiResponse updateV2Test()
 * @method ApiResponse updateV2CheckVersion($beta = 0)
 * @method ApiResponse updateV2Download($beta = 0)
 * @method ApiResponse updateV2Extract()
 * @method ApiResponse updateV2Remove($beta = 0)
 * @method ApiResponse updateV2UpdateVersion($beta = 0)
 * @method ApiResponse setUrl($url)
 * @method ApiResponse updateTest()
 * @method ApiResponse update()
 * @method ApiResponse getNotifications()
 * @method ApiResponse version()
 * @method ApiResponse faqGet($route)
 * @method ApiResponse faqIsDismissed($route)
 * @method ApiResponse faqDismiss($route)
 * @method ApiResponse faqClear()
 * @method ApiResponse faqDbTableCheck()
 * @method ApiResponse requirementTest()
 * @method ApiResponse writeUpdateLog($data)
 * @method ApiResponse getTotalProducts($data = array())
 * @method ApiResponse getProducts($data = array())
 * @method ApiResponse addOrderHistory($order_id, $data, $store_id = 0)
 */
class AdminModelExtensionOpenbayOpenbay extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/openbay';
    
}

