<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse connector($merchant_id, $secret, $url)
 * @method ApiResponse omRetrieve(KCConnector $connector, $order_id)
 * @method ApiResponse omCancel(KCConnector $connector, $order_id)
 * @method ApiResponse omCapture(KCConnector $connector, $order_id, $data)
 * @method ApiResponse omRefund(KCConnector $connector, $order_id, $data)
 * @method ApiResponse omExtendAuthorizationTime(KCConnector $connector, $order_id)
 * @method ApiResponse omUpdateMerchantReference(KCConnector $connector, $order_id, $data)
 * @method ApiResponse omUpdateAddress(KCConnector $connector, $order_id, $data)
 * @method ApiResponse omReleaseAuthorization(KCConnector $connector, $order_id)
 * @method ApiResponse omShippingInfo(KCConnector $connector, $order_id, $capture_id, $data)
 * @method ApiResponse omCustomerDetails(KCConnector $connector, $order_id, $capture_id, $data)
 * @method ApiResponse omTriggerSendOut(KCConnector $connector, $order_id, $capture_id)
 * @method ApiResponse getConnector($accounts, $country_id, $currency)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse log($data)
 */
class AdminModelExtensionPaymentKlarnaCheckout extends BaseModel
{
    const MODEL_NAME = 'extension/payment/klarna_checkout';
    const IS_ADMIN = true;
}

