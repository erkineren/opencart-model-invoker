<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse hasProductInCart($product_id, $option = array(), $recurring_id = 0)
 * @method ApiResponse getCountryByCode($code)
 * @method ApiResponse getZoneByCode($country_id, $code)
 * @method ApiResponse log($data, $title = null)
 */
class ModelExtensionModulePaypalSmartButton extends BaseModel
{
    const MODEL_NAME = 'extension/module/paypal_smart_button';
    
}

