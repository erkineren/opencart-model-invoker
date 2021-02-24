<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addZone($data)
 * @method ApiResponse editZone($zone_id, $data)
 * @method ApiResponse deleteZone($zone_id)
 * @method ApiResponse getZone($zone_id)
 * @method ApiResponse getZones($data = array())
 * @method ApiResponse getZonesByCountryId($country_id)
 * @method ApiResponse getTotalZones()
 * @method ApiResponse getTotalZonesByCountryId($country_id)
 */
class AdminModelLocalisationZone extends BaseModel
{
    const MODEL_NAME = 'localisation/zone';
    const IS_ADMIN = true;
}

