<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addStore($data)
 * @method ApiResponse editStore($store_id, $data)
 * @method ApiResponse deleteStore($store_id)
 * @method ApiResponse getStore($store_id)
 * @method ApiResponse getStores($data = array())
 * @method ApiResponse getTotalStores()
 * @method ApiResponse getTotalStoresByLayoutId($layout_id)
 * @method ApiResponse getTotalStoresByLanguage($language)
 * @method ApiResponse getTotalStoresByCurrency($currency)
 * @method ApiResponse getTotalStoresByCountryId($country_id)
 * @method ApiResponse getTotalStoresByZoneId($zone_id)
 * @method ApiResponse getTotalStoresByCustomerGroupId($customer_group_id)
 * @method ApiResponse getTotalStoresByInformationId($information_id)
 * @method ApiResponse getTotalStoresByOrderStatusId($order_status_id)
 */
class AdminModelSettingStore extends BaseModel
{
    const MODEL_NAME = 'setting/store';
    const IS_ADMIN = true;
}

