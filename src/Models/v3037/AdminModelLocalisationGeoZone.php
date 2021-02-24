<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addGeoZone($data)
 * @method ApiResponse editGeoZone($geo_zone_id, $data)
 * @method ApiResponse deleteGeoZone($geo_zone_id)
 * @method ApiResponse getGeoZone($geo_zone_id)
 * @method ApiResponse getGeoZones($data = array())
 * @method ApiResponse getTotalGeoZones()
 * @method ApiResponse getZoneToGeoZones($geo_zone_id)
 * @method ApiResponse getTotalZoneToGeoZoneByGeoZoneId($geo_zone_id)
 * @method ApiResponse getTotalZoneToGeoZoneByCountryId($country_id)
 * @method ApiResponse getTotalZoneToGeoZoneByZoneId($zone_id)
 */
class AdminModelLocalisationGeoZone extends BaseModel
{
    const MODEL_NAME = 'localisation/geo_zone';
    const IS_ADMIN = true;
}

