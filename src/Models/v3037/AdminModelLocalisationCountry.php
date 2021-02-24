<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addCountry($data)
 * @method ApiResponse editCountry($country_id, $data)
 * @method ApiResponse deleteCountry($country_id)
 * @method ApiResponse getCountry($country_id)
 * @method ApiResponse getCountries($data = array())
 * @method ApiResponse getTotalCountries()
 */
class AdminModelLocalisationCountry extends BaseModel
{
    const MODEL_NAME = 'localisation/country';
    const IS_ADMIN = true;
}

