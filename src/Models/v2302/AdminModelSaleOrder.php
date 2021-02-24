<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse deleteOrder($order_id)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse getOrders($data = array())
 * @method ApiResponse getOrderProducts($order_id)
 * @method ApiResponse getOrderOptions($order_id, $order_product_id)
 * @method ApiResponse getOrderVouchers($order_id)
 * @method ApiResponse getOrderVoucherByVoucherId($voucher_id)
 * @method ApiResponse getOrderTotals($order_id)
 * @method ApiResponse getTotalOrders($data = array())
 * @method ApiResponse getTotalOrdersByStoreId($store_id)
 * @method ApiResponse getTotalOrdersByOrderStatusId($order_status_id)
 * @method ApiResponse getTotalOrdersByProcessingStatus()
 * @method ApiResponse getTotalOrdersByCompleteStatus()
 * @method ApiResponse getTotalOrdersByLanguageId($language_id)
 * @method ApiResponse getTotalOrdersByCurrencyId($currency_id)
 * @method ApiResponse createInvoiceNo($order_id)
 * @method ApiResponse getOrderHistories($order_id, $start = 0, $limit = 10)
 * @method ApiResponse getTotalOrderHistories($order_id)
 * @method ApiResponse getTotalOrderHistoriesByOrderStatusId($order_status_id)
 * @method ApiResponse getEmailsByProductsOrdered($products, $start, $end)
 * @method ApiResponse getTotalEmailsByProductsOrdered($products)
 */
class AdminModelSaleOrder extends BaseModel
{
    const MODEL_NAME = 'sale/order';
    
}

