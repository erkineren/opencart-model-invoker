<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addLocation($data)
 * @method ApiResponse editLocation($location_id, $data)
 * @method ApiResponse deleteLocation($location_id)
 * @method ApiResponse getLocation($location_id)
 * @method ApiResponse getLocations($data = array())
 * @method ApiResponse getTotalLocations()
 */
class AdminModelLocalisationLocation extends BaseModel
{
    const MODEL_NAME = 'localisation/location';
    const IS_ADMIN = true;
}

