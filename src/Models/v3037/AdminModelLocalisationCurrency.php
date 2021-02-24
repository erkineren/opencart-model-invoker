<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addCurrency($data)
 * @method ApiResponse editCurrency($currency_id, $data)
 * @method ApiResponse deleteCurrency($currency_id)
 * @method ApiResponse getCurrency($currency_id)
 * @method ApiResponse getCurrencyByCode($currency)
 * @method ApiResponse getCurrencies($data = array())
 * @method ApiResponse refresh($force = false)
 * @method ApiResponse getTotalCurrencies()
 */
class AdminModelLocalisationCurrency extends BaseModel
{
    const MODEL_NAME = 'localisation/currency';
    const IS_ADMIN = true;
}

