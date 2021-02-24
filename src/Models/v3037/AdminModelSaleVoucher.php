<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addVoucher($data)
 * @method ApiResponse editVoucher($voucher_id, $data)
 * @method ApiResponse deleteVoucher($voucher_id)
 * @method ApiResponse getVoucher($voucher_id)
 * @method ApiResponse getVoucherByCode($code)
 * @method ApiResponse getVouchers($data = array())
 * @method ApiResponse getTotalVouchers()
 * @method ApiResponse getTotalVouchersByVoucherThemeId($voucher_theme_id)
 * @method ApiResponse getVoucherHistories($voucher_id, $start = 0, $limit = 10)
 * @method ApiResponse getTotalVoucherHistories($voucher_id)
 */
class AdminModelSaleVoucher extends BaseModel
{
    const MODEL_NAME = 'sale/voucher';
    const IS_ADMIN = true;
}

