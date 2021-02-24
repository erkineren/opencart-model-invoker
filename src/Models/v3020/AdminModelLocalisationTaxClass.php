<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addTaxClass($data)
 * @method ApiResponse editTaxClass($tax_class_id, $data)
 * @method ApiResponse deleteTaxClass($tax_class_id)
 * @method ApiResponse getTaxClass($tax_class_id)
 * @method ApiResponse getTaxClasses($data = array())
 * @method ApiResponse getTotalTaxClasses()
 * @method ApiResponse getTaxRules($tax_class_id)
 * @method ApiResponse getTotalTaxRulesByTaxRateId($tax_rate_id)
 */
class AdminModelLocalisationTaxClass extends BaseModel
{
    const MODEL_NAME = 'localisation/tax_class';
    
}

