<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getCurrencyByCode($currency)
 * @method ApiResponse getCurrencies()
 */
class ModelLocalisationCurrency extends BaseModel
{
    const MODEL_NAME = 'localisation/currency';
    
}

