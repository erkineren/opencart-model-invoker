<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getCountry($country_id)
 * @method ApiResponse getCountries()
 */
class ModelLocalisationCountry extends BaseModel
{
    const MODEL_NAME = 'localisation/country';
    
}

