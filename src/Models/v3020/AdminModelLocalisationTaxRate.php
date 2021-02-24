<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addTaxRate($data)
 * @method ApiResponse editTaxRate($tax_rate_id, $data)
 * @method ApiResponse deleteTaxRate($tax_rate_id)
 * @method ApiResponse getTaxRate($tax_rate_id)
 * @method ApiResponse getTaxRates($data = array())
 * @method ApiResponse getTaxRateCustomerGroups($tax_rate_id)
 * @method ApiResponse getTotalTaxRates()
 * @method ApiResponse getTotalTaxRatesByGeoZoneId($geo_zone_id)
 */
class AdminModelLocalisationTaxRate extends BaseModel
{
    const MODEL_NAME = 'localisation/tax_rate';
    const IS_ADMIN = true;
}

