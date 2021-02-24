<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTotalSales($data = array())
 * @method ApiResponse getTotalOrdersByCountry()
 * @method ApiResponse getTotalOrdersByDay()
 * @method ApiResponse getTotalOrdersByWeek()
 * @method ApiResponse getTotalOrdersByMonth()
 * @method ApiResponse getTotalOrdersByYear()
 * @method ApiResponse getOrders($data = array())
 * @method ApiResponse getTotalOrders($data = array())
 * @method ApiResponse getTaxes($data = array())
 * @method ApiResponse getTotalTaxes($data = array())
 * @method ApiResponse getShipping($data = array())
 * @method ApiResponse getTotalShipping($data = array())
 */
class AdminModelExtensionReportSale extends BaseModel
{
    const MODEL_NAME = 'extension/report/sale';
    
}

