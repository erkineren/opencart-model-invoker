<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getZone($zone_id)
 * @method ApiResponse getZonesByCountryId($country_id)
 */
class ModelLocalisationZone extends BaseModel
{
    const MODEL_NAME = 'localisation/zone';
    
}

