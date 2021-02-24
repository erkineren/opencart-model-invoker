<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addVoucherTheme($data)
 * @method ApiResponse editVoucherTheme($voucher_theme_id, $data)
 * @method ApiResponse deleteVoucherTheme($voucher_theme_id)
 * @method ApiResponse getVoucherTheme($voucher_theme_id)
 * @method ApiResponse getVoucherThemes($data = array())
 * @method ApiResponse getVoucherThemeDescriptions($voucher_theme_id)
 * @method ApiResponse getTotalVoucherThemes()
 */
class AdminModelSaleVoucherTheme extends BaseModel
{
    const MODEL_NAME = 'sale/voucher_theme';
    
}

