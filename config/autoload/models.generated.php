<?php

use OpencartApi\Models\BaseModel;
use OpencartApi\Http\ApiResponse;
/**
 * @method static ApiResponse getStatistics()
 * @method static ApiResponse getValue($code)
 * @method static ApiResponse addValue($code, $value)
 * @method static ApiResponse removeValue($code, $value)
 * @method static ApiResponse editValue($code, $value)
 */
class ModelReportStatistics extends BaseModel 
{
    const MODEL_NAME = 'report/statistics';
    
}




/**
 * @method static ApiResponse getMarketingByCode($code)
 */
class ModelCheckoutMarketing extends BaseModel 
{
    const MODEL_NAME = 'checkout/marketing';
    
}




/**
 * @method static ApiResponse addOrder($data)
 * @method static ApiResponse editOrder($order_id, $data)
 * @method static ApiResponse deleteOrder($order_id)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse getOrderProducts($order_id)
 * @method static ApiResponse getOrderOptions($order_id, $order_product_id)
 * @method static ApiResponse getOrderVouchers($order_id)
 * @method static ApiResponse getOrderTotals($order_id)
 * @method static ApiResponse addOrderHistory($order_id, $order_status_id, $comment = '', $notify = false, $override = false)
 */
class ModelCheckoutOrder extends BaseModel 
{
    const MODEL_NAME = 'checkout/order';
    
}




/**
 * @method static ApiResponse addRecurring($order_id, $description, $data)
 * @method static ApiResponse editReference($order_recurring_id, $reference)
 */
class ModelCheckoutRecurring extends BaseModel 
{
    const MODEL_NAME = 'checkout/recurring';
    
}




/**
 * @method static ApiResponse getTheme($route, $theme)
 */
class ModelDesignTheme extends BaseModel 
{
    const MODEL_NAME = 'design/theme';
    
}




/**
 * @method static ApiResponse getBanner($banner_id)
 */
class ModelDesignBanner extends BaseModel 
{
    const MODEL_NAME = 'design/banner';
    
}




/**
 * @method static ApiResponse getTranslations($route)
 */
class ModelDesignTranslation extends BaseModel 
{
    const MODEL_NAME = 'design/translation';
    
}




/**
 * @method static ApiResponse getLayout($route)
 * @method static ApiResponse getLayoutModules($layout_id, $position)
 */
class ModelDesignLayout extends BaseModel 
{
    const MODEL_NAME = 'design/layout';
    
}




/**

 */
class ModelSettingEvent extends BaseModel 
{
    const MODEL_NAME = 'setting/event';
    
}




/**
 * @method static ApiResponse getSetting($code, $store_id = 0)
 * @method static ApiResponse getSettingValue($key, $store_id = 0)
 */
class ModelSettingSetting extends BaseModel 
{
    const MODEL_NAME = 'setting/setting';
    
}




/**
 * @method static ApiResponse getModule($module_id)
 */
class ModelSettingModule extends BaseModel 
{
    const MODEL_NAME = 'setting/module';
    
}




/**
 * @method static ApiResponse login($username, $key)
 */
class ModelSettingApi extends BaseModel 
{
    const MODEL_NAME = 'setting/api';
    
}




/**
 * @method static ApiResponse getStores($data = array())
 */
class ModelSettingStore extends BaseModel 
{
    const MODEL_NAME = 'setting/store';
    
}




/**

 */
class ModelSettingExtension extends BaseModel 
{
    const MODEL_NAME = 'setting/extension';
    
}




/**
 * @method static ApiResponse getCurrencyByCode($currency)
 * @method static ApiResponse getCurrencies()
 */
class ModelLocalisationCurrency extends BaseModel 
{
    const MODEL_NAME = 'localisation/currency';
    
}




/**
 * @method static ApiResponse getCountry($country_id)
 * @method static ApiResponse getCountries()
 */
class ModelLocalisationCountry extends BaseModel 
{
    const MODEL_NAME = 'localisation/country';
    
}




/**
 * @method static ApiResponse getReturnReasons($data = array())
 */
class ModelLocalisationReturnReason extends BaseModel 
{
    const MODEL_NAME = 'localisation/return_reason';
    
}




/**
 * @method static ApiResponse getOrderStatus($order_status_id)
 * @method static ApiResponse getOrderStatuses()
 */
class ModelLocalisationOrderStatus extends BaseModel 
{
    const MODEL_NAME = 'localisation/order_status';
    
}




/**
 * @method static ApiResponse getLanguage($language_id)
 * @method static ApiResponse getLanguages()
 */
class ModelLocalisationLanguage extends BaseModel 
{
    const MODEL_NAME = 'localisation/language';
    
}




/**
 * @method static ApiResponse getLocation($location_id)
 */
class ModelLocalisationLocation extends BaseModel 
{
    const MODEL_NAME = 'localisation/location';
    
}




/**
 * @method static ApiResponse getZone($zone_id)
 * @method static ApiResponse getZonesByCountryId($country_id)
 */
class ModelLocalisationZone extends BaseModel 
{
    const MODEL_NAME = 'localisation/zone';
    
}




/**
 * @method static ApiResponse addOnline($ip, $customer_id, $url, $referer)
 */
class ModelToolOnline extends BaseModel 
{
    const MODEL_NAME = 'tool/online';
    
}




/**
 * @method static ApiResponse resize($filename, $width, $height)
 */
class ModelToolImage extends BaseModel 
{
    const MODEL_NAME = 'tool/image';
    
}




/**
 * @method static ApiResponse addUpload($name, $filename)
 * @method static ApiResponse getUploadByCode($code)
 */
class ModelToolUpload extends BaseModel 
{
    const MODEL_NAME = 'tool/upload';
    
}




/**
 * @method static ApiResponse getDownload($download_id)
 * @method static ApiResponse getDownloads($start = 0, $limit = 20)
 * @method static ApiResponse getTotalDownloads()
 */
class ModelAccountDownload extends BaseModel 
{
    const MODEL_NAME = 'account/download';
    
}




/**
 * @method static ApiResponse getTransactions($data = array())
 * @method static ApiResponse getTotalTransactions()
 * @method static ApiResponse getTotalAmount()
 */
class ModelAccountTransaction extends BaseModel 
{
    const MODEL_NAME = 'account/transaction';
    
}




/**
 * @method static ApiResponse addActivity($key, $data)
 */
class ModelAccountActivity extends BaseModel 
{
    const MODEL_NAME = 'account/activity';
    
}




/**
 * @method static ApiResponse addCustomer($data)
 * @method static ApiResponse editCustomer($customer_id, $data)
 * @method static ApiResponse editPassword($email, $password)
 * @method static ApiResponse editAddressId($customer_id, $address_id)
 * @method static ApiResponse editCode($email, $code)
 * @method static ApiResponse editNewsletter($newsletter)
 * @method static ApiResponse getCustomer($customer_id)
 * @method static ApiResponse getCustomerByEmail($email)
 * @method static ApiResponse getCustomerByCode($code)
 * @method static ApiResponse getCustomerByToken($token)
 * @method static ApiResponse getTotalCustomersByEmail($email)
 * @method static ApiResponse addTransaction($customer_id, $description, $amount = '', $order_id = 0)
 * @method static ApiResponse deleteTransactionByOrderId($order_id)
 * @method static ApiResponse getTransactionTotal($customer_id)
 * @method static ApiResponse getTotalTransactionsByOrderId($order_id)
 * @method static ApiResponse getRewardTotal($customer_id)
 * @method static ApiResponse getIps($customer_id)
 * @method static ApiResponse addLoginAttempt($email)
 * @method static ApiResponse getLoginAttempts($email)
 * @method static ApiResponse deleteLoginAttempts($email)
 * @method static ApiResponse addAffiliate($customer_id, $data)
 * @method static ApiResponse editAffiliate($customer_id, $data)
 * @method static ApiResponse getAffiliate($customer_id)
 * @method static ApiResponse getAffiliateByTracking($tracking)
 */
class ModelAccountCustomer extends BaseModel 
{
    const MODEL_NAME = 'account/customer';
    
}




/**
 * @method static ApiResponse getCustomField($custom_field_id)
 * @method static ApiResponse getCustomFields($customer_group_id = 0)
 */
class ModelAccountCustomField extends BaseModel 
{
    const MODEL_NAME = 'account/custom_field';
    
}




/**
 * @method static ApiResponse login($username, $key)
 * @method static ApiResponse addApiSession($api_id, $session_id, $ip)
 * @method static ApiResponse getApiIps($api_id)
 */
class ModelAccountApi extends BaseModel 
{
    const MODEL_NAME = 'account/api';
    
}




/**
 * @method static ApiResponse addSearch($data)
 */
class ModelAccountSearch extends BaseModel 
{
    const MODEL_NAME = 'account/search';
    
}




/**
 * @method static ApiResponse addWishlist($product_id)
 * @method static ApiResponse deleteWishlist($product_id)
 * @method static ApiResponse getWishlist()
 * @method static ApiResponse getTotalWishlist()
 */
class ModelAccountWishlist extends BaseModel 
{
    const MODEL_NAME = 'account/wishlist';
    
}




/**
 * @method static ApiResponse addReturn($data)
 * @method static ApiResponse getReturn($return_id)
 * @method static ApiResponse getReturns($start = 0, $limit = 20)
 * @method static ApiResponse getTotalReturns()
 * @method static ApiResponse getReturnHistories($return_id)
 */
class ModelAccountReturn extends BaseModel 
{
    const MODEL_NAME = 'account/return';
    
}




/**
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse getOrders($start = 0, $limit = 20)
 * @method static ApiResponse getOrderProduct($order_id, $order_product_id)
 * @method static ApiResponse getOrderProducts($order_id)
 * @method static ApiResponse getOrderOptions($order_id, $order_product_id)
 * @method static ApiResponse getOrderVouchers($order_id)
 * @method static ApiResponse getOrderTotals($order_id)
 * @method static ApiResponse getOrderHistories($order_id)
 * @method static ApiResponse getTotalOrders()
 * @method static ApiResponse getTotalOrderProductsByOrderId($order_id)
 * @method static ApiResponse getTotalOrderVouchersByOrderId($order_id)
 */
class ModelAccountOrder extends BaseModel 
{
    const MODEL_NAME = 'account/order';
    
}




/**
 * @method static ApiResponse getRewards($data = array())
 * @method static ApiResponse getTotalRewards()
 * @method static ApiResponse getTotalPoints()
 */
class ModelAccountReward extends BaseModel 
{
    const MODEL_NAME = 'account/reward';
    
}




/**
 * @method static ApiResponse addAddress($customer_id, $data)
 * @method static ApiResponse editAddress($address_id, $data)
 * @method static ApiResponse deleteAddress($address_id)
 * @method static ApiResponse getAddress($address_id)
 * @method static ApiResponse getAddresses()
 * @method static ApiResponse getTotalAddresses()
 */
class ModelAccountAddress extends BaseModel 
{
    const MODEL_NAME = 'account/address';
    
}




/**
 * @method static ApiResponse getCustomerGroup($customer_group_id)
 * @method static ApiResponse getCustomerGroups()
 */
class ModelAccountCustomerGroup extends BaseModel 
{
    const MODEL_NAME = 'account/customer_group';
    
}




/**
 * @method static ApiResponse getOrderRecurring($order_recurring_id)
 * @method static ApiResponse getOrderRecurrings($start = 0, $limit = 20)
 * @method static ApiResponse getOrderRecurringByReference($reference)
 * @method static ApiResponse getOrderRecurringTransactions($order_recurring_id)
 * @method static ApiResponse getTotalOrderRecurrings()
 * @method static ApiResponse addOrderRecurringTransaction($order_recurring_id, $type)
 * @method static ApiResponse editOrderRecurringStatus($order_recurring_id, $status)
 */
class ModelAccountRecurring extends BaseModel 
{
    const MODEL_NAME = 'account/recurring';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentAuthorizenetSim extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/authorizenet_sim';
    
}




/**
 * @method static ApiResponse orderCreate(KCConnector $connector, $order_data)
 * @method static ApiResponse orderRetrieve(KCConnector $connector, $order_id)
 * @method static ApiResponse orderUpdate(KCConnector $connector, $order_id, $order_data)
 * @method static ApiResponse omOrderRetrieve(KCConnector $connector, $order_id)
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getConnector($accounts, $currency)
 * @method static ApiResponse getOrder($order_ref)
 * @method static ApiResponse getOrderByOrderId($order_id)
 * @method static ApiResponse addOrder($order_id, $order_ref, $data)
 * @method static ApiResponse updateOrder($order_id, $order_ref, $data)
 * @method static ApiResponse updateOcOrder($order_id, $data)
 * @method static ApiResponse updateOcOrderEmail($order_id, $email)
 * @method static ApiResponse getCountryByIsoCode2($iso_code_2)
 * @method static ApiResponse getCountryByIsoCode3($iso_code_3)
 * @method static ApiResponse getZoneByCode($code, $country_id)
 * @method static ApiResponse getCountriesByGeoZone($geo_zone_id)
 * @method static ApiResponse checkForPaymentTaxes($products = array())
 * @method static ApiResponse getDefaultShippingMethod($shipping_methods)
 * @method static ApiResponse log($data, $step = 6)
 * @method static ApiResponse subscribeNewsletter($customer_id)
 * @method static ApiResponse getTotals()
 */
class ModelExtensionPaymentKlarnaCheckout extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/klarna_checkout';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse checkEnrollment($account, $amount, $currency, $order_ref)
 * @method static ApiResponse enrollmentSignature($account, $amount, $currency, $order_ref, $card_number, $card_expire, $card_type, $card_name, $pares)
 * @method static ApiResponse capturePayment($account, $amount, $currency, $order_id, $order_ref, $card_number, $expire, $name, $type, $cvv, $issue, $eci_ref, $eci = '', $cavv = '', $xid = '')
 * @method static ApiResponse addOrder($order_info, $response, $account, $order_ref)
 * @method static ApiResponse addTransaction($realex_remote_order_id, $type, $order_info)
 * @method static ApiResponse logger($message)
 * @method static ApiResponse addHistory($order_id, $order_status_id, $comment)
 */
class ModelExtensionPaymentRealexRemote extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/realex_remote';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentCod extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/cod';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse addOrder($order_info, $response_data)
 * @method static ApiResponse addTransaction($bluepay_hosted_order_id, $type, $order_info)
 * @method static ApiResponse logger($message)
 */
class ModelExtensionPaymentBluepayHosted extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/bluepay_hosted';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse addOrder($order_data)
 * @method static ApiResponse addTransaction($eway_order_id, $type, $transactionid, $order_info)
 * @method static ApiResponse getCards($customer_id)
 * @method static ApiResponse checkToken($token_id)
 * @method static ApiResponse addCard($order_id, $card_data)
 * @method static ApiResponse updateCard($order_id, $token)
 * @method static ApiResponse updateFullCard($card_id, $token, $card_data)
 * @method static ApiResponse deleteCard($order_id)
 * @method static ApiResponse getAccessCode($request)
 * @method static ApiResponse getSharedAccessCode($request)
 * @method static ApiResponse getAccessCodeResult($access_code)
 * @method static ApiResponse sendCurl($url, $data, $is_post=true)
 */
class ModelExtensionPaymentEway extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/eway';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentSagepayUs extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/sagepay_us';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentWechatPay extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/wechat_pay';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getOrderTaxAmount($order_id)
 * @method static ApiResponse addPilibabaOrder($response_data)
 * @method static ApiResponse getConsumerInfo($order_id)
 * @method static ApiResponse updateOrderInfo($data, $order_id)
 * @method static ApiResponse log($data)
 */
class ModelExtensionPaymentPilibaba extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pilibaba';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getCards($customer_id)
 * @method static ApiResponse addCard($card_data)
 * @method static ApiResponse updateCard($card_id, $token)
 * @method static ApiResponse getCard($card_id, $token)
 * @method static ApiResponse deleteCard($card_id)
 * @method static ApiResponse addOrder($order_id, $response_data, $payment_data, $card_id)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse updateOrder($order_info, $data)
 * @method static ApiResponse deleteOrder($vendor_tx_code)
 * @method static ApiResponse addTransaction($sagepay_direct_order_id, $type, $order_info)
 * @method static ApiResponse recurringPayment($item, $vendor_tx_code)
 * @method static ApiResponse cronPayment()
 * @method static ApiResponse updateCronJobRunTime()
 * @method static ApiResponse sendCurl($url, $payment_data, $i = null)
 * @method static ApiResponse logger($title, $data)
 * @method static ApiResponse recurringPayments()
 */
class ModelExtensionPaymentSagepayDirect extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/sagepay_direct';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getCards($customer_id)
 * @method static ApiResponse addCard($card_data)
 * @method static ApiResponse addOrder($order_info, $response_data)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($bluepay_redirect_order_id, $type, $order_info)
 * @method static ApiResponse logger($message)
 * @method static ApiResponse sendCurl($url, $post_data)
 */
class ModelExtensionPaymentBluepayRedirect extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/bluepay_redirect';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse addOrder($order_data)
 * @method static ApiResponse addTransaction($transaction_data)
 * @method static ApiResponse paymentRequestInfo()
 * @method static ApiResponse getTotalCaptured($paypal_order_id)
 * @method static ApiResponse getTotalRefunded($paypal_order_id)
 * @method static ApiResponse getTransactionRow($transaction_id)
 * @method static ApiResponse updateOrder($capture_status, $order_id)
 * @method static ApiResponse call($data)
 * @method static ApiResponse recurringPayments()
 * @method static ApiResponse createToken($len = 32)
 * @method static ApiResponse log($data, $title = null)
 * @method static ApiResponse cleanReturn($data)
 */
class ModelExtensionPaymentPpExpress extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pp_express';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentPaypoint extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/paypoint';
    
}




/**
 * @method static ApiResponse addOrder($data)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse createPayment($key, $secret, $payment_data)
 * @method static ApiResponse finalizePayment($key, $secret, $payment_id, $pares)
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getSupportedCurrencies()
 * @method static ApiResponse log($data, $class_step = 6, $function_step = 6)
 */
class ModelExtensionPaymentCardinity extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/cardinity';
    
}




/**
 * @method static ApiResponse addTransaction($data = array(), $status)
 * @method static ApiResponse deleteRevisedTransaction($id)
 * @method static ApiResponse deleteTransactionByOrderId($order_id)
 * @method static ApiResponse getInitialPayments()
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getMonths()
 * @method static ApiResponse getPayPalProfileIds()
 * @method static ApiResponse getRevisedTransaction($id)
 * @method static ApiResponse getTransaction($id)
 * @method static ApiResponse getTransactionByLayBuyRefId($laybuy_ref_id)
 * @method static ApiResponse log($data, $step = 6)
 * @method static ApiResponse prepareTransactionReport($post_data)
 * @method static ApiResponse updateCronRunTime()
 * @method static ApiResponse updateTransaction($id, $status, $report, $transaction)
 */
class ModelExtensionPaymentLaybuy extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/laybuy';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentWebPaymentSoftware extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/web_payment_software';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentKlarnaAccount extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/klarna_account';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentTwocheckout extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/twocheckout';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse addG2aOrder($order_info)
 * @method static ApiResponse updateOrder($g2apay_order_id, $g2apay_transaction_id, $type, $order_info)
 * @method static ApiResponse addTransaction($g2apay_order_id, $type, $order_info)
 * @method static ApiResponse getG2aOrder($order_id)
 * @method static ApiResponse sendCurl($url, $fields)
 * @method static ApiResponse logger($message)
 */
class ModelExtensionPaymentG2apay extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/g2apay';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentNochex extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/nochex';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentPpStandard extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pp_standard';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentPayza extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/payza';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentPaymate extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/paymate';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getCards($customer_id)
 * @method static ApiResponse getCard($card_id, $token)
 * @method static ApiResponse addCard($data)
 * @method static ApiResponse deleteCard($card_id)
 * @method static ApiResponse addOrder($order_info)
 * @method static ApiResponse getOrder($order_id, $vpstx_id = null)
 * @method static ApiResponse updateOrder($order_info, $vps_txn_id, $tx_auth_no)
 * @method static ApiResponse deleteOrder($order_id)
 * @method static ApiResponse addTransaction($sagepay_server_order_id, $type, $order_info)
 * @method static ApiResponse getRecurringOrders($order_id)
 * @method static ApiResponse addRecurringPayment($item, $vendor_tx_code)
 * @method static ApiResponse updateRecurringPayment($item, $order_details)
 * @method static ApiResponse cronPayment()
 * @method static ApiResponse updateCronJobRunTime()
 * @method static ApiResponse sendCurl($url, $payment_data, $i = null)
 * @method static ApiResponse logger($title, $data)
 * @method static ApiResponse recurringPayments()
 */
class ModelExtensionPaymentSagepayServer extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/sagepay_server';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getOrderId($secure_token_id)
 * @method static ApiResponse addOrder($order_id, $secure_token_id)
 * @method static ApiResponse updateOrder($data)
 * @method static ApiResponse call($data)
 * @method static ApiResponse addTransaction($data)
 * @method static ApiResponse log($message)
 */
class ModelExtensionPaymentPpPayflowIframe extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pp_payflow_iframe';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentCheque extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/cheque';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse addOrder($order_data)
 * @method static ApiResponse addTransaction($transaction_data)
 */
class ModelExtensionPaymentPpProIframe extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pp_pro_iframe';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentAlipayCross extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/alipay_cross';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getCardTypes()
 * @method static ApiResponse getMonths()
 * @method static ApiResponse getYears()
 * @method static ApiResponse getCard($token, $customer_id)
 * @method static ApiResponse getCards($customer_id)
 * @method static ApiResponse addCard($cardconnect_order_id, $customer_id, $profileid, $token, $type, $account, $expiry)
 * @method static ApiResponse deleteCard($token, $customer_id)
 * @method static ApiResponse addOrder($order_info, $payment_method)
 * @method static ApiResponse addTransaction($cardconnect_order_id, $type, $status, $order_info)
 * @method static ApiResponse getSettlementStatuses($merchant_id, $date)
 * @method static ApiResponse updateTransactionStatusByRetref($retref, $status)
 * @method static ApiResponse updateCronRunTime()
 * @method static ApiResponse log($data)
 */
class ModelExtensionPaymentCardconnect extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/cardconnect';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse addTransaction($transaction, $merchant_id, $address, $order_id, $user_agent, $ip)
 * @method static ApiResponse tokenExpiredEmail()
 * @method static ApiResponse tokenRevokedEmail()
 * @method static ApiResponse cronEmail($result)
 * @method static ApiResponse recurringPayments()
 * @method static ApiResponse createRecurring($recurring, $order_id, $description, $reference)
 * @method static ApiResponse validateCRON()
 * @method static ApiResponse updateToken()
 * @method static ApiResponse nextRecurringPayments()
 * @method static ApiResponse addRecurringTransaction($order_recurring_id, $reference, $amount, $status)
 * @method static ApiResponse updateRecurringExpired($order_recurring_id)
 * @method static ApiResponse updateRecurringTrial($order_recurring_id)
 * @method static ApiResponse suspendRecurringProfile($order_recurring_id)
 */
class ModelExtensionPaymentSquareup extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/squareup';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentPerpetualPayments extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/perpetual_payments';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentBankTransfer extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/bank_transfer';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentAuthorizenetAim extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/authorizenet_aim';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse editOrder($order_id, $order)
 * @method static ApiResponse addReference($order_id, $reference)
 * @method static ApiResponse confirmOrder($order_id, $order_status_id, $comment = '', $notify = false)
 * @method static ApiResponse updateOrder($order_id, $order_status_id, $comment = '', $notify = false)
 * @method static ApiResponse getCountry($iso_code_2)
 * @method static ApiResponse logger($message)
 */
class ModelExtensionPaymentSecuretradingPp extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/securetrading_pp';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getCards($customer_id)
 * @method static ApiResponse addCard($order_id, $card_data)
 * @method static ApiResponse deleteCard($token)
 * @method static ApiResponse addOrder($order_info, $order_code)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($worldpay_order_id, $type, $order_info)
 * @method static ApiResponse getTransactions($worldpay_order_id)
 * @method static ApiResponse recurringPayment($item, $order_id_rand, $token)
 * @method static ApiResponse cronPayment()
 * @method static ApiResponse getWorldpayOrder($worldpay_order_id)
 * @method static ApiResponse updateCronJobRunTime()
 * @method static ApiResponse sendCurl($url, $order = null)
 * @method static ApiResponse logger($data)
 * @method static ApiResponse recurringPayments()
 */
class ModelExtensionPaymentWorldpay extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/worldpay';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentKlarnaInvoice extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/klarna_invoice';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse addOrder($order_info, $pas_ref, $auth_code, $account, $order_ref)
 * @method static ApiResponse addTransaction($globalpay_order_id, $type, $order_info)
 * @method static ApiResponse addHistory($order_id, $order_status_id, $comment)
 * @method static ApiResponse logger($message)
 */
class ModelExtensionPaymentGlobalpay extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/globalpay';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse addOrder($order_info, $pas_ref, $auth_code, $account, $order_ref)
 * @method static ApiResponse addTransaction($realex_order_id, $type, $order_info)
 * @method static ApiResponse addHistory($order_id, $order_status_id, $comment)
 * @method static ApiResponse logger($message)
 */
class ModelExtensionPaymentRealex extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/realex';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse call($data)
 * @method static ApiResponse format($number, $currency, $value = '', $format = false)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addMd($order_id, $md)
 * @method static ApiResponse removeMd($md)
 * @method static ApiResponse updateReference($order_id, $transaction_reference)
 * @method static ApiResponse getOrderId($md)
 * @method static ApiResponse confirmOrder($order_id, $order_status_id, $comment = '', $notify = false)
 * @method static ApiResponse updateOrder($order_id, $order_status_id, $comment = '', $notify = false)
 * @method static ApiResponse logger($message)
 */
class ModelExtensionPaymentSecuretradingWs extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/securetrading_ws';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse addOrder($order_info, $order_ref, $transaction_date)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($fd_order_id, $type, $order_info = array())
 * @method static ApiResponse addHistory($order_id, $order_status_id, $comment)
 * @method static ApiResponse logger($message)
 * @method static ApiResponse mapCurrency($code)
 * @method static ApiResponse getStoredCards()
 * @method static ApiResponse storeCard($token, $customer_id, $month, $year, $digits)
 * @method static ApiResponse responseHash($total, $currency, $txn_date, $approval_code)
 * @method static ApiResponse updateVoidStatus($order_id, $status)
 * @method static ApiResponse updateCaptureStatus($order_id, $status)
 */
class ModelExtensionPaymentFirstdata extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/firstdata';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse pageExecute($request, $httpmethod = "POST")
 * @method static ApiResponse rsaCheckV1($params, $signType='RSA')
 * @method static ApiResponse getSignContent($params)
 * @method static ApiResponse generateSign($params, $signType = "RSA")
 */
class ModelExtensionPaymentAlipay extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/alipay';
    
}




/**
 * @method static ApiResponse getCountry($iso2)
 * @method static ApiResponse getZone($name, $country_id)
 * @method static ApiResponse addTaxesForTotals($order_id, $totals)
 * @method static ApiResponse addCustomer($data)
 * @method static ApiResponse getAddress()
 * @method static ApiResponse addAddress($address)
 * @method static ApiResponse setOrderShipping($order_id, $has_free_shipping)
 * @method static ApiResponse hasFreeShipping($order_id)
 * @method static ApiResponse getShippingPrice($order_id)
 * @method static ApiResponse getAdditionalCharges($order_id)
 * @method static ApiResponse addAmazonOrderId($order_id, $amazon_authorization_id, $capture_status, $total, $currency_code)
 * @method static ApiResponse addTransaction($amazon_login_pay_order_id, $amazon_authorization_id, $amazon_capture_id, $type, $status, $total)
 * @method static ApiResponse closeOrderRef($amazon_order_reference_id)
 * @method static ApiResponse sendOrder($order_id, $total, $currency_code)
 * @method static ApiResponse editOrder($order_id, $order)
 * @method static ApiResponse updateStatus($amazon_id, $type, $status)
 * @method static ApiResponse authorizationIpn($xml)
 * @method static ApiResponse captureIpn($xml)
 * @method static ApiResponse refundIpn($xml)
 * @method static ApiResponse capture($amazon_login_pay_order)
 * @method static ApiResponse updateCaptureStatus($amazon_login_pay_order_id, $status)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse getUserInfo($access_token)
 * @method static ApiResponse offAmazon($Action, $parameter_data = array())
 * @method static ApiResponse sendCurl($url, $parameters)
 * @method static ApiResponse parseRawMessage($body)
 * @method static ApiResponse getWidgetJs()
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse logger($data)
 */
class ModelExtensionPaymentAmazonLoginPay extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/amazon_login_pay';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse checkEnrollment($account, $amount, $currency, $order_ref)
 * @method static ApiResponse enrollmentSignature($account, $amount, $currency, $order_ref, $card_number, $card_expire, $card_type, $card_name, $pares)
 * @method static ApiResponse capturePayment($account, $amount, $currency, $order_id, $order_ref, $card_number, $expire, $name, $type, $cvv, $issue, $eci_ref, $eci = '', $cavv = '', $xid = '')
 * @method static ApiResponse addOrder($order_info, $response, $account, $order_ref)
 * @method static ApiResponse addTransaction($globalpay_remote_order_id, $type, $order_info)
 * @method static ApiResponse logger($message)
 * @method static ApiResponse addHistory($order_id, $order_status_id, $comment)
 */
class ModelExtensionPaymentGlobalpayRemote extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/globalpay_remote';
    
}




/**
 * @method static ApiResponse setMerchant($api_key)
 * @method static ApiResponse getMethod($payment_address, $total)
 * @method static ApiResponse getProductSettings($product_id)
 * @method static ApiResponse isEnabled()
 * @method static ApiResponse hashOrderId($order_id, $salt)
 * @method static ApiResponse saveLookup($order_id, $salt, $proposal_id = null, $application_id = null, $deposit_amount = null)
 * @method static ApiResponse getLookupByOrderId($order_id)
 * @method static ApiResponse getGlobalSelectedPlans()
 * @method static ApiResponse getAllPlans()
 * @method static ApiResponse getCartPlans($cart)
 * @method static ApiResponse getPlans($default_plans)
 * @method static ApiResponse getOrderTotals()
 * @method static ApiResponse getProductPlans($product_id)
 */
class ModelExtensionPaymentDivido extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/divido';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentLiqpay extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/liqpay';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentSkrill extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/skrill';
    
}




/**
 * @method static ApiResponse generateToken($gateway, $data)
 * @method static ApiResponse addTransaction($gateway, $data)
 * @method static ApiResponse getCustomer($gateway, $customer_id, $log = true)
 * @method static ApiResponse getPaymentMethod($gateway, $token)
 * @method static ApiResponse addPaymentMethod($gateway, $data)
 * @method static ApiResponse deletePaymentMethod($gateway, $token)
 * @method static ApiResponse getPaymentMethodNonce($gateway, $token)
 * @method static ApiResponse createPaymentMethodNonce($gateway, $token)
 * @method static ApiResponse setCredentials()
 * @method static ApiResponse setGateway($access_token)
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse getSupportedCurrencies()
 * @method static ApiResponse log($data)
 */
class ModelExtensionPaymentPpBraintree extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pp_braintree';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentFreeCheckout extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/free_checkout';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentPpPro extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pp_pro';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 */
class ModelExtensionPaymentPpPayflow extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pp_payflow';
    
}




/**
 * @method static ApiResponse getMethod($address, $total)
 * @method static ApiResponse capturePayment($data, $order_id)
 * @method static ApiResponse call($xml)
 * @method static ApiResponse addOrder($order_info, $capture_result)
 * @method static ApiResponse addTransaction($firstdata_remote_order_id, $type, $order_info = array())
 * @method static ApiResponse logger($message)
 * @method static ApiResponse addHistory($order_id, $order_status_id, $comment)
 * @method static ApiResponse mapCurrency($code)
 * @method static ApiResponse getStoredCards()
 * @method static ApiResponse storeCard($token, $customer_id, $type, $month, $year, $digits)
 */
class ModelExtensionPaymentFirstdataRemote extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/firstdata_remote';
    
}




/**
 * @method static ApiResponse getTotal($total)
 */
class ModelExtensionTotalTax extends BaseModel 
{
    const MODEL_NAME = 'extension/total/tax';
    
}




/**
 * @method static ApiResponse getVoucherTheme($voucher_theme_id)
 * @method static ApiResponse getVoucherThemes($data = array())
 */
class ModelExtensionTotalVoucherTheme extends BaseModel 
{
    const MODEL_NAME = 'extension/total/voucher_theme';
    
}




/**
 * @method static ApiResponse getTotal($total)
 */
class ModelExtensionTotalTotal extends BaseModel 
{
    const MODEL_NAME = 'extension/total/total';
    
}




/**
 * @method static ApiResponse getCoupon($code)
 * @method static ApiResponse getTotal($total)
 * @method static ApiResponse confirm($order_info, $order_total)
 * @method static ApiResponse unconfirm($order_id)
 * @method static ApiResponse getTotalCouponHistoriesByCoupon($coupon)
 * @method static ApiResponse getTotalCouponHistoriesByCustomerId($coupon, $customer_id)
 */
class ModelExtensionTotalCoupon extends BaseModel 
{
    const MODEL_NAME = 'extension/total/coupon';
    
}




/**
 * @method static ApiResponse getTotal($total)
 */
class ModelExtensionTotalShipping extends BaseModel 
{
    const MODEL_NAME = 'extension/total/shipping';
    
}




/**
 * @method static ApiResponse addVoucher($order_id, $data)
 * @method static ApiResponse disableVoucher($order_id)
 * @method static ApiResponse getVoucher($code)
 * @method static ApiResponse getTotal($total)
 * @method static ApiResponse confirm($order_info, $order_total)
 * @method static ApiResponse unconfirm($order_id)
 */
class ModelExtensionTotalVoucher extends BaseModel 
{
    const MODEL_NAME = 'extension/total/voucher';
    
}




/**
 * @method static ApiResponse getTotal($total)
 */
class ModelExtensionTotalHandling extends BaseModel 
{
    const MODEL_NAME = 'extension/total/handling';
    
}




/**
 * @method static ApiResponse getTotal($total)
 * @method static ApiResponse confirm($order_info, $order_total)
 * @method static ApiResponse unconfirm($order_id)
 */
class ModelExtensionTotalCredit extends BaseModel 
{
    const MODEL_NAME = 'extension/total/credit';
    
}




/**
 * @method static ApiResponse getTotal($total)
 */
class ModelExtensionTotalLowOrderFee extends BaseModel 
{
    const MODEL_NAME = 'extension/total/low_order_fee';
    
}




/**
 * @method static ApiResponse getTotal($total)
 */
class ModelExtensionTotalSubTotal extends BaseModel 
{
    const MODEL_NAME = 'extension/total/sub_total';
    
}




/**
 * @method static ApiResponse getTotal($totals)
 */
class ModelExtensionTotalKlarnaFee extends BaseModel 
{
    const MODEL_NAME = 'extension/total/klarna_fee';
    
}




/**
 * @method static ApiResponse getTotal($total)
 * @method static ApiResponse confirm($order_info, $order_total)
 * @method static ApiResponse unconfirm($order_id)
 */
class ModelExtensionTotalReward extends BaseModel 
{
    const MODEL_NAME = 'extension/total/reward';
    
}




/**
 * @method static ApiResponse getQuote($address)
 */
class ModelExtensionShippingWeight extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/weight';
    
}




/**

 */
class ModelExtensionShippingCitylink extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/citylink';
    
}




/**

 */
class ModelExtensionShippingPilibaba extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/pilibaba';
    
}




/**

 */
class ModelExtensionShippingFree extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/free';
    
}




/**
 * @method static ApiResponse getQuote($address)
 */
class ModelExtensionShippingUsps extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/usps';
    
}




/**

 */
class ModelExtensionShippingEcShip extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/ec_ship';
    
}




/**

 */
class ModelExtensionShippingFedex extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/fedex';
    
}




/**

 */
class ModelExtensionShippingUps extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/ups';
    
}




/**

 */
class ModelExtensionShippingItem extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/item';
    
}




/**

 */
class ModelExtensionShippingParcelforce48 extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/parcelforce_48';
    
}




/**

 */
class ModelExtensionShippingPickup extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/pickup';
    
}




/**
 * @method static ApiResponse getQuote($address)
 */
class ModelExtensionShippingAuspost extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/auspost';
    
}




/**

 */
class ModelExtensionShippingFlat extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/flat';
    
}




/**

 */
class ModelExtensionShippingRoyalMail extends BaseModel 
{
    const MODEL_NAME = 'extension/shipping/royal_mail';
    
}




/**
 * @method static ApiResponse getCategories()
 * @method static ApiResponse getTotalCategories()
 */
class ModelExtensionFeedGoogleBase extends BaseModel 
{
    const MODEL_NAME = 'extension/feed/google_base';
    
}




/**
 * @method static ApiResponse check($data)
 */
class ModelExtensionFraudFraudlabspro extends BaseModel 
{
    const MODEL_NAME = 'extension/fraud/fraudlabspro';
    
}




/**
 * @method static ApiResponse check($order_info)
 */
class ModelExtensionFraudMaxmind extends BaseModel 
{
    const MODEL_NAME = 'extension/fraud/maxmind';
    
}




/**
 * @method static ApiResponse check($order_info)
 */
class ModelExtensionFraudIp extends BaseModel 
{
    const MODEL_NAME = 'extension/fraud/ip';
    
}




/**
 * @method static ApiResponse addCustomer($data)
 * @method static ApiResponse getCustomer($customer_id, $sandbox)
 * @method static ApiResponse addCard($customer_id, $sandbox, $data)
 * @method static ApiResponse getCard($squareup_token_id)
 * @method static ApiResponse getCards($customer_id, $sandbox)
 * @method static ApiResponse cardExists($customer_id, $data)
 * @method static ApiResponse verifyCardCustomer($squareup_token_id, $customer_id)
 * @method static ApiResponse deleteCard($squareup_token_id)
 */
class ModelExtensionCreditCardSquareup extends BaseModel 
{
    const MODEL_NAME = 'extension/credit_card/squareup';
    
}




/**
 * @method static ApiResponse setStatus($insertion_id, $status_string)
 * @method static ApiResponse getProductRows($insertion_id)
 * @method static ApiResponse getProduct($insertion_id)
 * @method static ApiResponse linkItems(array $data)
 * @method static ApiResponse insertError($data)
 * @method static ApiResponse deleteErrors($insertion_id)
 * @method static ApiResponse setSubmitError($insertion_id, $message)
 * @method static ApiResponse linkProduct($amazonus_sku, $product_id, $var = '')
 * @method static ApiResponse getProductQuantity($product_id, $var = '')
 * @method static ApiResponse updateSearch($results)
 * @method static ApiResponse addListingReport($data)
 * @method static ApiResponse removeListingReportLock($marketplace)
 */
class ModelExtensionOpenbayAmazonusProduct extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/amazonus_product';
    
}




/**
 * @method static ApiResponse inbound($data)
 */
class ModelExtensionOpenbayEtsyProduct extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/etsy_product';
    
}




/**
 * @method static ApiResponse setStatus($insertion_id, $status_string)
 * @method static ApiResponse getProductRows($insertion_id)
 * @method static ApiResponse getProduct($insertion_id)
 * @method static ApiResponse linkItems(array $data)
 * @method static ApiResponse insertError($data)
 * @method static ApiResponse deleteErrors($insertion_id)
 * @method static ApiResponse setSubmitError($insertion_id, $message)
 * @method static ApiResponse linkProduct($amazon_sku, $product_id, $var = '')
 * @method static ApiResponse getProductQuantity($product_id, $var = '')
 * @method static ApiResponse updateSearch($results)
 * @method static ApiResponse addListingReport($data)
 * @method static ApiResponse removeListingReportLock($marketplace)
 */
class ModelExtensionOpenbayAmazonProduct extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/amazon_product';
    
}




/**
 * @method static ApiResponse listingSuccessful($product_id, $marketplace)
 * @method static ApiResponse listingFailed($product_id, $marketplace, $messages)
 */
class ModelExtensionOpenbayAmazonListing extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/amazon_listing';
    
}




/**
 * @method static ApiResponse getRelistRule($id)
 * @method static ApiResponse importItems($data)
 * @method static ApiResponse getDisplayProducts()
 * @method static ApiResponse resize($filename, $width, $height, $type = "")
 */
class ModelExtensionOpenbayEbayProduct extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/ebay_product';
    
}




/**
 * @method static ApiResponse inbound($orders)
 * @method static ApiResponse updateOrderStatus($order_id, $status_id)
 * @method static ApiResponse updatePaid($order_id, $status)
 * @method static ApiResponse updateShipped($order_id, $status)
 * @method static ApiResponse modifyStock($product_id, $qty, $symbol = '-')
 * @method static ApiResponse addOrderHistory($order_id)
 */
class ModelExtensionOpenbayEtsyOrder extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/etsy_order';
    
}




/**
 * @method static ApiResponse acknowledgeOrder($order_id)
 * @method static ApiResponse getProductId($sku)
 * @method static ApiResponse getProductVar($sku)
 * @method static ApiResponse decreaseProductQuantity($product_id, $delta, $var = '')
 * @method static ApiResponse getMappedStatus($amazonus_status)
 * @method static ApiResponse getCountryName($country_code)
 * @method static ApiResponse getCountryId($country_code)
 * @method static ApiResponse getZoneId($zone_name)
 * @method static ApiResponse updateOrderStatus($order_id, $status_id)
 * @method static ApiResponse addAmazonusOrder($order_id, $amazonus_order_id)
 * @method static ApiResponse addAmazonusOrderProducts($order_id, $data)
 * @method static ApiResponse getOrderId($amazonus_order_id)
 * @method static ApiResponse getOrderStatus($order_id)
 * @method static ApiResponse getAmazonusOrderId($order_id)
 * @method static ApiResponse getProductOptionsByVar($product_var)
 * @method static ApiResponse addOrderHistory($order_id)
 */
class ModelExtensionOpenbayAmazonusOrder extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/amazonus_order';
    
}




/**
 * @method static ApiResponse importOrders($data)
 * @method static ApiResponse orderHandle($order)
 * @method static ApiResponse addOrderLine($data, $order_id, $created)
 * @method static ApiResponse addOrderLines($order, $order_id)
 * @method static ApiResponse getOrderLine($txn_id, $item_id)
 * @method static ApiResponse getOrderLines($order_id)
 * @method static ApiResponse removeOrderLines($canceling)
 * @method static ApiResponse cancel($order_id)
 * @method static ApiResponse updatePaymentDetails($order_id, $order)
 * @method static ApiResponse getHistory($order_id)
 * @method static ApiResponse hasAddress($order_id)
 * @method static ApiResponse update($order_id, $order_status_id, $comment = '')
 * @method static ApiResponse confirm($order_id, $order_status_id, $comment = '')
 * @method static ApiResponse getCountryAddressFormat($iso2)
 * @method static ApiResponse orderLinkCreate($order_id, $smp_id)
 * @method static ApiResponse delete($order_id)
 * @method static ApiResponse lockAdd($smp_id)
 * @method static ApiResponse lockDelete($smp_id)
 * @method static ApiResponse lockExists($smp_id)
 * @method static ApiResponse addOrderHistory($order_id)
 */
class ModelExtensionOpenbayEbayOrder extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/ebay_order';
    
}




/**
 * @method static ApiResponse listingSuccessful($product_id)
 * @method static ApiResponse listingFailed($product_id, $messages)
 */
class ModelExtensionOpenbayAmazonusListing extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/amazonus_listing';
    
}




/**
 * @method static ApiResponse acknowledgeOrder($order_id)
 * @method static ApiResponse getProductId($sku)
 * @method static ApiResponse getProductVar($sku)
 * @method static ApiResponse decreaseProductQuantity($product_id, $delta, $var = '')
 * @method static ApiResponse getMappedStatus($amazon_status)
 * @method static ApiResponse getCountryName($country_code)
 * @method static ApiResponse getCountryId($country_code)
 * @method static ApiResponse getZoneId($zone_name)
 * @method static ApiResponse updateOrderStatus($order_id, $status_id)
 * @method static ApiResponse addAmazonOrder($order_id, $amazon_order_id)
 * @method static ApiResponse addAmazonOrderProducts($order_id, $data)
 * @method static ApiResponse getOrderId($amazon_order_id)
 * @method static ApiResponse getOrderStatus($order_id)
 * @method static ApiResponse getAmazonOrderId($order_id)
 * @method static ApiResponse getProductOptionsByVar($product_var)
 * @method static ApiResponse addOrderHistory($order_id)
 */
class ModelExtensionOpenbayAmazonOrder extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/amazon_order';
    
}




/**
 * @method static ApiResponse getStatusLabel($id)
 * @method static ApiResponse getTransactionByOrderId($order_id)
 * @method static ApiResponse getTransactionStatuses()
 * @method static ApiResponse isLayBuyOrder($order_id)
 */
class ModelExtensionModuleLaybuyLayout extends BaseModel 
{
    const MODEL_NAME = 'extension/module/laybuy_layout';
    
}




/**
 * @method static ApiResponse getTokens($code)
 * @method static ApiResponse getUserInfo($access_token)
 * @method static ApiResponse log($data, $class_step = 6)
 */
class ModelExtensionModulePpLogin extends BaseModel 
{
    const MODEL_NAME = 'extension/module/pp_login';
    
}




/**
 * @method static ApiResponse getManufacturer($manufacturer_id)
 * @method static ApiResponse getManufacturers($data = array())
 */
class ModelCatalogManufacturer extends BaseModel 
{
    const MODEL_NAME = 'catalog/manufacturer';
    
}




/**
 * @method static ApiResponse getCategory($category_id)
 * @method static ApiResponse getCategories($parent_id = 0)
 * @method static ApiResponse getCategoryFilters($category_id)
 * @method static ApiResponse getCategoryLayoutId($category_id)
 * @method static ApiResponse getTotalCategoriesByCategoryId($parent_id = 0)
 */
class ModelCatalogCategory extends BaseModel 
{
    const MODEL_NAME = 'catalog/category';
    
}




/**
 * @method static ApiResponse getInformation($information_id)
 * @method static ApiResponse getInformations()
 * @method static ApiResponse getInformationLayoutId($information_id)
 */
class ModelCatalogInformation extends BaseModel 
{
    const MODEL_NAME = 'catalog/information';
    
}




/**
 * @method static ApiResponse updateViewed($product_id)
 * @method static ApiResponse getProduct($product_id)
 * @method static ApiResponse getProducts($data = array())
 * @method static ApiResponse getProductSpecials($data = array())
 * @method static ApiResponse getLatestProducts($limit)
 * @method static ApiResponse getPopularProducts($limit)
 * @method static ApiResponse getBestSellerProducts($limit)
 * @method static ApiResponse getProductAttributes($product_id)
 * @method static ApiResponse getProductOptions($product_id)
 * @method static ApiResponse getProductDiscounts($product_id)
 * @method static ApiResponse getProductImages($product_id)
 * @method static ApiResponse getProductRelated($product_id)
 * @method static ApiResponse getProductLayoutId($product_id)
 * @method static ApiResponse getCategories($product_id)
 * @method static ApiResponse getTotalProducts($data = array())
 * @method static ApiResponse getProfile($product_id, $recurring_id)
 * @method static ApiResponse getProfiles($product_id)
 * @method static ApiResponse getTotalProductSpecials()
 */
class ModelCatalogProduct extends BaseModel 
{
    const MODEL_NAME = 'catalog/product';
    
}




/**
 * @method static ApiResponse addReview($product_id, $data)
 * @method static ApiResponse getReviewsByProductId($product_id, $start = 0, $limit = 20)
 * @method static ApiResponse getTotalReviewsByProductId($product_id)
 */
class ModelCatalogReview extends BaseModel 
{
    const MODEL_NAME = 'catalog/review';
    
}

/**
 * @method static ApiResponse addCustomer($data)
 * @method static ApiResponse editCustomer($customer_id, $data)
 * @method static ApiResponse editToken($customer_id, $token)
 * @method static ApiResponse deleteCustomer($customer_id)
 * @method static ApiResponse getCustomer($customer_id)
 * @method static ApiResponse getCustomerByEmail($email)
 * @method static ApiResponse getCustomers($data = array())
 * @method static ApiResponse getAddress($address_id)
 * @method static ApiResponse getAddresses($customer_id)
 * @method static ApiResponse getTotalCustomers($data = array())
 * @method static ApiResponse getAffliateByTracking($tracking)
 * @method static ApiResponse getAffiliate($customer_id)
 * @method static ApiResponse getAffiliates($data = array())
 * @method static ApiResponse getTotalAffiliates($data = array())
 * @method static ApiResponse getTotalAddressesByCustomerId($customer_id)
 * @method static ApiResponse getTotalAddressesByCountryId($country_id)
 * @method static ApiResponse getTotalAddressesByZoneId($zone_id)
 * @method static ApiResponse getTotalCustomersByCustomerGroupId($customer_group_id)
 * @method static ApiResponse addHistory($customer_id, $comment)
 * @method static ApiResponse getHistories($customer_id, $start = 0, $limit = 10)
 * @method static ApiResponse getTotalHistories($customer_id)
 * @method static ApiResponse addTransaction($customer_id, $description = '', $amount = '', $order_id = 0)
 * @method static ApiResponse deleteTransactionByOrderId($order_id)
 * @method static ApiResponse getTransactions($customer_id, $start = 0, $limit = 10)
 * @method static ApiResponse getTotalTransactions($customer_id)
 * @method static ApiResponse getTransactionTotal($customer_id)
 * @method static ApiResponse getTotalTransactionsByOrderId($order_id)
 * @method static ApiResponse addReward($customer_id, $description = '', $points = '', $order_id = 0)
 * @method static ApiResponse deleteReward($order_id)
 * @method static ApiResponse getRewards($customer_id, $start = 0, $limit = 10)
 * @method static ApiResponse getTotalRewards($customer_id)
 * @method static ApiResponse getRewardTotal($customer_id)
 * @method static ApiResponse getTotalCustomerRewardsByOrderId($order_id)
 * @method static ApiResponse getIps($customer_id, $start = 0, $limit = 10)
 * @method static ApiResponse getTotalIps($customer_id)
 * @method static ApiResponse getTotalCustomersByIp($ip)
 * @method static ApiResponse getTotalLoginAttempts($email)
 * @method static ApiResponse deleteLoginAttempts($email)
 */
class AdminModelCustomerCustomer extends BaseModel 
{
    const MODEL_NAME = 'customer/customer';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addCustomField($data)
 * @method static ApiResponse editCustomField($custom_field_id, $data)
 * @method static ApiResponse deleteCustomField($custom_field_id)
 * @method static ApiResponse getCustomField($custom_field_id)
 * @method static ApiResponse getCustomFields($data = array())
 * @method static ApiResponse getCustomFieldDescriptions($custom_field_id)
 * @method static ApiResponse getCustomFieldValue($custom_field_value_id)
 * @method static ApiResponse getCustomFieldValues($custom_field_id)
 * @method static ApiResponse getCustomFieldCustomerGroups($custom_field_id)
 * @method static ApiResponse getCustomFieldValueDescriptions($custom_field_id)
 * @method static ApiResponse getTotalCustomFields()
 */
class AdminModelCustomerCustomField extends BaseModel 
{
    const MODEL_NAME = 'customer/custom_field';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getCustomerApprovals($data = array())
 * @method static ApiResponse getCustomerApproval($customer_approval_id)
 * @method static ApiResponse getTotalCustomerApprovals($data = array())
 * @method static ApiResponse approveCustomer($customer_id)
 * @method static ApiResponse denyCustomer($customer_id)
 * @method static ApiResponse approveAffiliate($customer_id)
 * @method static ApiResponse denyAffiliate($customer_id)
 */
class AdminModelCustomerCustomerApproval extends BaseModel 
{
    const MODEL_NAME = 'customer/customer_approval';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addCustomerGroup($data)
 * @method static ApiResponse editCustomerGroup($customer_group_id, $data)
 * @method static ApiResponse deleteCustomerGroup($customer_group_id)
 * @method static ApiResponse getCustomerGroup($customer_group_id)
 * @method static ApiResponse getCustomerGroups($data = array())
 * @method static ApiResponse getCustomerGroupDescriptions($customer_group_id)
 * @method static ApiResponse getTotalCustomerGroups()
 */
class AdminModelCustomerCustomerGroup extends BaseModel 
{
    const MODEL_NAME = 'customer/customer_group';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getStatistics()
 * @method static ApiResponse getValue($code)
 * @method static ApiResponse addValue($code, $value)
 * @method static ApiResponse editValue($code, $value)
 * @method static ApiResponse removeValue($code, $value)
 */
class AdminModelReportStatistics extends BaseModel 
{
    const MODEL_NAME = 'report/statistics';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getOnline($data = array())
 * @method static ApiResponse getTotalOnline($data = array())
 */
class AdminModelReportOnline extends BaseModel 
{
    const MODEL_NAME = 'report/online';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addUserGroup($data)
 * @method static ApiResponse editUserGroup($user_group_id, $data)
 * @method static ApiResponse deleteUserGroup($user_group_id)
 * @method static ApiResponse getUserGroup($user_group_id)
 * @method static ApiResponse getUserGroups($data = array())
 * @method static ApiResponse getTotalUserGroups()
 * @method static ApiResponse addPermission($user_group_id, $type, $route)
 * @method static ApiResponse removePermission($user_group_id, $type, $route)
 */
class AdminModelUserUserGroup extends BaseModel 
{
    const MODEL_NAME = 'user/user_group';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addUser($data)
 * @method static ApiResponse editUser($user_id, $data)
 * @method static ApiResponse editPassword($user_id, $password)
 * @method static ApiResponse editCode($email, $code)
 * @method static ApiResponse deleteUser($user_id)
 * @method static ApiResponse getUser($user_id)
 * @method static ApiResponse getUserByUsername($username)
 * @method static ApiResponse getUserByEmail($email)
 * @method static ApiResponse getUserByCode($code)
 * @method static ApiResponse getUsers($data = array())
 * @method static ApiResponse getTotalUsers()
 * @method static ApiResponse getTotalUsersByGroupId($user_group_id)
 * @method static ApiResponse getTotalUsersByEmail($email)
 */
class AdminModelUserUser extends BaseModel 
{
    const MODEL_NAME = 'user/user';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addApi($data)
 * @method static ApiResponse editApi($api_id, $data)
 * @method static ApiResponse deleteApi($api_id)
 * @method static ApiResponse getApi($api_id)
 * @method static ApiResponse getApis($data = array())
 * @method static ApiResponse getTotalApis()
 * @method static ApiResponse addApiIp($api_id, $ip)
 * @method static ApiResponse getApiIps($api_id)
 * @method static ApiResponse addApiSession($api_id, $session_id, $ip)
 * @method static ApiResponse getApiSessions($api_id)
 * @method static ApiResponse deleteApiSession($api_session_id)
 * @method static ApiResponse deleteApiSessionBySessonId($session_id)
 */
class AdminModelUserApi extends BaseModel 
{
    const MODEL_NAME = 'user/api';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addSeoUrl($data)
 * @method static ApiResponse editSeoUrl($seo_url_id, $data)
 * @method static ApiResponse deleteSeoUrl($seo_url_id)
 * @method static ApiResponse getSeoUrl($seo_url_id)
 * @method static ApiResponse getSeoUrls($data = array())
 * @method static ApiResponse getTotalSeoUrls($data = array())
 * @method static ApiResponse getSeoUrlsByKeyword($keyword)
 * @method static ApiResponse getSeoUrlsByQuery($keyword)
 */
class AdminModelDesignSeoUrl extends BaseModel 
{
    const MODEL_NAME = 'design/seo_url';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse editTheme($store_id, $theme, $route, $code)
 * @method static ApiResponse deleteTheme($theme_id)
 * @method static ApiResponse getTheme($store_id, $theme, $route)
 * @method static ApiResponse getThemes($start = 0, $limit = 10)
 * @method static ApiResponse getTotalThemes()
 */
class AdminModelDesignTheme extends BaseModel 
{
    const MODEL_NAME = 'design/theme';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addBanner($data)
 * @method static ApiResponse editBanner($banner_id, $data)
 * @method static ApiResponse deleteBanner($banner_id)
 * @method static ApiResponse getBanner($banner_id)
 * @method static ApiResponse getBanners($data = array())
 * @method static ApiResponse getBannerImages($banner_id)
 * @method static ApiResponse getTotalBanners()
 */
class AdminModelDesignBanner extends BaseModel 
{
    const MODEL_NAME = 'design/banner';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addTranslation($data)
 * @method static ApiResponse editTranslation($translation_id, $data)
 * @method static ApiResponse deleteTranslation($translation_id)
 * @method static ApiResponse getTranslation($translation_id)
 * @method static ApiResponse getTranslations($data = array())
 * @method static ApiResponse getTotalTranslations()
 */
class AdminModelDesignTranslation extends BaseModel 
{
    const MODEL_NAME = 'design/translation';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addLayout($data)
 * @method static ApiResponse editLayout($layout_id, $data)
 * @method static ApiResponse deleteLayout($layout_id)
 * @method static ApiResponse getLayout($layout_id)
 * @method static ApiResponse getLayouts($data = array())
 * @method static ApiResponse getLayoutRoutes($layout_id)
 * @method static ApiResponse getLayoutModules($layout_id)
 * @method static ApiResponse getTotalLayouts()
 */
class AdminModelDesignLayout extends BaseModel 
{
    const MODEL_NAME = 'design/layout';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addEvent($code, $trigger, $action, $status = 1, $sort_order = 0)
 * @method static ApiResponse deleteEvent($event_id)
 * @method static ApiResponse deleteEventByCode($code)
 * @method static ApiResponse enableEvent($event_id)
 * @method static ApiResponse disableEvent($event_id)
 * @method static ApiResponse uninstall($type, $code)
 * @method static ApiResponse getEvent($event_id)
 * @method static ApiResponse getEventByCode($code)
 * @method static ApiResponse getEvents($data = array())
 * @method static ApiResponse getTotalEvents()
 */
class AdminModelSettingEvent extends BaseModel 
{
    const MODEL_NAME = 'setting/event';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getSetting($code, $store_id = 0)
 * @method static ApiResponse editSetting($code, $data, $store_id = 0)
 * @method static ApiResponse deleteSetting($code, $store_id = 0)
 * @method static ApiResponse getSettingValue($key, $store_id = 0)
 * @method static ApiResponse editSettingValue($code = '', $key = '', $value = '', $store_id = 0)
 */
class AdminModelSettingSetting extends BaseModel 
{
    const MODEL_NAME = 'setting/setting';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addModule($code, $data)
 * @method static ApiResponse editModule($module_id, $data)
 * @method static ApiResponse deleteModule($module_id)
 * @method static ApiResponse getModule($module_id)
 * @method static ApiResponse getModules()
 * @method static ApiResponse getModulesByCode($code)
 * @method static ApiResponse deleteModulesByCode($code)
 */
class AdminModelSettingModule extends BaseModel 
{
    const MODEL_NAME = 'setting/module';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addModification($data)
 * @method static ApiResponse deleteModification($modification_id)
 * @method static ApiResponse deleteModificationsByExtensionInstallId($extension_install_id)
 * @method static ApiResponse enableModification($modification_id)
 * @method static ApiResponse disableModification($modification_id)
 * @method static ApiResponse getModification($modification_id)
 * @method static ApiResponse getModifications($data = array())
 * @method static ApiResponse getTotalModifications()
 * @method static ApiResponse getModificationByCode($code)
 */
class AdminModelSettingModification extends BaseModel 
{
    const MODEL_NAME = 'setting/modification';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addStore($data)
 * @method static ApiResponse editStore($store_id, $data)
 * @method static ApiResponse deleteStore($store_id)
 * @method static ApiResponse getStore($store_id)
 * @method static ApiResponse getStores($data = array())
 * @method static ApiResponse getTotalStores()
 * @method static ApiResponse getTotalStoresByLayoutId($layout_id)
 * @method static ApiResponse getTotalStoresByLanguage($language)
 * @method static ApiResponse getTotalStoresByCurrency($currency)
 * @method static ApiResponse getTotalStoresByCountryId($country_id)
 * @method static ApiResponse getTotalStoresByZoneId($zone_id)
 * @method static ApiResponse getTotalStoresByCustomerGroupId($customer_group_id)
 * @method static ApiResponse getTotalStoresByInformationId($information_id)
 * @method static ApiResponse getTotalStoresByOrderStatusId($order_status_id)
 */
class AdminModelSettingStore extends BaseModel 
{
    const MODEL_NAME = 'setting/store';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getInstalled($type)
 * @method static ApiResponse install($type, $code)
 * @method static ApiResponse uninstall($type, $code)
 * @method static ApiResponse addExtensionInstall($filename, $extension_download_id = 0)
 * @method static ApiResponse deleteExtensionInstall($extension_install_id)
 * @method static ApiResponse getExtensionInstalls($start = 0, $limit = 10)
 * @method static ApiResponse getExtensionInstallByExtensionDownloadId($extension_download_id)
 * @method static ApiResponse getTotalExtensionInstalls()
 * @method static ApiResponse addExtensionPath($extension_install_id, $path)
 * @method static ApiResponse deleteExtensionPath($extension_path_id)
 * @method static ApiResponse getExtensionPathsByExtensionInstallId($extension_install_id)
 */
class AdminModelSettingExtension extends BaseModel 
{
    const MODEL_NAME = 'setting/extension';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addCurrency($data)
 * @method static ApiResponse editCurrency($currency_id, $data)
 * @method static ApiResponse deleteCurrency($currency_id)
 * @method static ApiResponse getCurrency($currency_id)
 * @method static ApiResponse getCurrencyByCode($currency)
 * @method static ApiResponse getCurrencies($data = array())
 * @method static ApiResponse refresh($force = false)
 * @method static ApiResponse getTotalCurrencies()
 */
class AdminModelLocalisationCurrency extends BaseModel 
{
    const MODEL_NAME = 'localisation/currency';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addStockStatus($data)
 * @method static ApiResponse editStockStatus($stock_status_id, $data)
 * @method static ApiResponse deleteStockStatus($stock_status_id)
 * @method static ApiResponse getStockStatus($stock_status_id)
 * @method static ApiResponse getStockStatuses($data = array())
 * @method static ApiResponse getStockStatusDescriptions($stock_status_id)
 * @method static ApiResponse getTotalStockStatuses()
 */
class AdminModelLocalisationStockStatus extends BaseModel 
{
    const MODEL_NAME = 'localisation/stock_status';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addCountry($data)
 * @method static ApiResponse editCountry($country_id, $data)
 * @method static ApiResponse deleteCountry($country_id)
 * @method static ApiResponse getCountry($country_id)
 * @method static ApiResponse getCountries($data = array())
 * @method static ApiResponse getTotalCountries()
 */
class AdminModelLocalisationCountry extends BaseModel 
{
    const MODEL_NAME = 'localisation/country';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addReturnReason($data)
 * @method static ApiResponse editReturnReason($return_reason_id, $data)
 * @method static ApiResponse deleteReturnReason($return_reason_id)
 * @method static ApiResponse getReturnReason($return_reason_id)
 * @method static ApiResponse getReturnReasons($data = array())
 * @method static ApiResponse getReturnReasonDescriptions($return_reason_id)
 * @method static ApiResponse getTotalReturnReasons()
 */
class AdminModelLocalisationReturnReason extends BaseModel 
{
    const MODEL_NAME = 'localisation/return_reason';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addOrderStatus($data)
 * @method static ApiResponse editOrderStatus($order_status_id, $data)
 * @method static ApiResponse deleteOrderStatus($order_status_id)
 * @method static ApiResponse getOrderStatus($order_status_id)
 * @method static ApiResponse getOrderStatuses($data = array())
 * @method static ApiResponse getOrderStatusDescriptions($order_status_id)
 * @method static ApiResponse getTotalOrderStatuses()
 */
class AdminModelLocalisationOrderStatus extends BaseModel 
{
    const MODEL_NAME = 'localisation/order_status';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addWeightClass($data)
 * @method static ApiResponse editWeightClass($weight_class_id, $data)
 * @method static ApiResponse deleteWeightClass($weight_class_id)
 * @method static ApiResponse getWeightClasses($data = array())
 * @method static ApiResponse getWeightClass($weight_class_id)
 * @method static ApiResponse getWeightClassDescriptionByUnit($unit)
 * @method static ApiResponse getWeightClassDescriptions($weight_class_id)
 * @method static ApiResponse getTotalWeightClasses()
 */
class AdminModelLocalisationWeightClass extends BaseModel 
{
    const MODEL_NAME = 'localisation/weight_class';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addLanguage($data)
 * @method static ApiResponse editLanguage($language_id, $data)
 * @method static ApiResponse deleteLanguage($language_id)
 * @method static ApiResponse getLanguage($language_id)
 * @method static ApiResponse getLanguages($data = array())
 * @method static ApiResponse getLanguageByCode($code)
 * @method static ApiResponse getTotalLanguages()
 */
class AdminModelLocalisationLanguage extends BaseModel 
{
    const MODEL_NAME = 'localisation/language';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addLocation($data)
 * @method static ApiResponse editLocation($location_id, $data)
 * @method static ApiResponse deleteLocation($location_id)
 * @method static ApiResponse getLocation($location_id)
 * @method static ApiResponse getLocations($data = array())
 * @method static ApiResponse getTotalLocations()
 */
class AdminModelLocalisationLocation extends BaseModel 
{
    const MODEL_NAME = 'localisation/location';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addTaxRate($data)
 * @method static ApiResponse editTaxRate($tax_rate_id, $data)
 * @method static ApiResponse deleteTaxRate($tax_rate_id)
 * @method static ApiResponse getTaxRate($tax_rate_id)
 * @method static ApiResponse getTaxRates($data = array())
 * @method static ApiResponse getTaxRateCustomerGroups($tax_rate_id)
 * @method static ApiResponse getTotalTaxRates()
 * @method static ApiResponse getTotalTaxRatesByGeoZoneId($geo_zone_id)
 */
class AdminModelLocalisationTaxRate extends BaseModel 
{
    const MODEL_NAME = 'localisation/tax_rate';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addLengthClass($data)
 * @method static ApiResponse editLengthClass($length_class_id, $data)
 * @method static ApiResponse deleteLengthClass($length_class_id)
 * @method static ApiResponse getLengthClasses($data = array())
 * @method static ApiResponse getLengthClass($length_class_id)
 * @method static ApiResponse getLengthClassDescriptionByUnit($unit)
 * @method static ApiResponse getLengthClassDescriptions($length_class_id)
 * @method static ApiResponse getTotalLengthClasses()
 */
class AdminModelLocalisationLengthClass extends BaseModel 
{
    const MODEL_NAME = 'localisation/length_class';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addTaxClass($data)
 * @method static ApiResponse editTaxClass($tax_class_id, $data)
 * @method static ApiResponse deleteTaxClass($tax_class_id)
 * @method static ApiResponse getTaxClass($tax_class_id)
 * @method static ApiResponse getTaxClasses($data = array())
 * @method static ApiResponse getTotalTaxClasses()
 * @method static ApiResponse getTaxRules($tax_class_id)
 * @method static ApiResponse getTotalTaxRulesByTaxRateId($tax_rate_id)
 */
class AdminModelLocalisationTaxClass extends BaseModel 
{
    const MODEL_NAME = 'localisation/tax_class';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addGeoZone($data)
 * @method static ApiResponse editGeoZone($geo_zone_id, $data)
 * @method static ApiResponse deleteGeoZone($geo_zone_id)
 * @method static ApiResponse getGeoZone($geo_zone_id)
 * @method static ApiResponse getGeoZones($data = array())
 * @method static ApiResponse getTotalGeoZones()
 * @method static ApiResponse getZoneToGeoZones($geo_zone_id)
 * @method static ApiResponse getTotalZoneToGeoZoneByGeoZoneId($geo_zone_id)
 * @method static ApiResponse getTotalZoneToGeoZoneByCountryId($country_id)
 * @method static ApiResponse getTotalZoneToGeoZoneByZoneId($zone_id)
 */
class AdminModelLocalisationGeoZone extends BaseModel 
{
    const MODEL_NAME = 'localisation/geo_zone';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addReturnStatus($data)
 * @method static ApiResponse editReturnStatus($return_status_id, $data)
 * @method static ApiResponse deleteReturnStatus($return_status_id)
 * @method static ApiResponse getReturnStatus($return_status_id)
 * @method static ApiResponse getReturnStatuses($data = array())
 * @method static ApiResponse getReturnStatusDescriptions($return_status_id)
 * @method static ApiResponse getTotalReturnStatuses()
 */
class AdminModelLocalisationReturnStatus extends BaseModel 
{
    const MODEL_NAME = 'localisation/return_status';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addZone($data)
 * @method static ApiResponse editZone($zone_id, $data)
 * @method static ApiResponse deleteZone($zone_id)
 * @method static ApiResponse getZone($zone_id)
 * @method static ApiResponse getZones($data = array())
 * @method static ApiResponse getZonesByCountryId($country_id)
 * @method static ApiResponse getTotalZones()
 * @method static ApiResponse getTotalZonesByCountryId($country_id)
 */
class AdminModelLocalisationZone extends BaseModel 
{
    const MODEL_NAME = 'localisation/zone';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addReturnAction($data)
 * @method static ApiResponse editReturnAction($return_action_id, $data)
 * @method static ApiResponse deleteReturnAction($return_action_id)
 * @method static ApiResponse getReturnAction($return_action_id)
 * @method static ApiResponse getReturnActions($data = array())
 * @method static ApiResponse getReturnActionDescriptions($return_action_id)
 * @method static ApiResponse getTotalReturnActions()
 */
class AdminModelLocalisationReturnAction extends BaseModel 
{
    const MODEL_NAME = 'localisation/return_action';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addCoupon($data)
 * @method static ApiResponse editCoupon($coupon_id, $data)
 * @method static ApiResponse deleteCoupon($coupon_id)
 * @method static ApiResponse getCoupon($coupon_id)
 * @method static ApiResponse getCouponByCode($code)
 * @method static ApiResponse getCoupons($data = array())
 * @method static ApiResponse getCouponProducts($coupon_id)
 * @method static ApiResponse getCouponCategories($coupon_id)
 * @method static ApiResponse getTotalCoupons()
 * @method static ApiResponse getCouponHistories($coupon_id, $start = 0, $limit = 10)
 * @method static ApiResponse getTotalCouponHistories($coupon_id)
 */
class AdminModelMarketingCoupon extends BaseModel 
{
    const MODEL_NAME = 'marketing/coupon';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addMarketing($data)
 * @method static ApiResponse editMarketing($marketing_id, $data)
 * @method static ApiResponse deleteMarketing($marketing_id)
 * @method static ApiResponse getMarketing($marketing_id)
 * @method static ApiResponse getMarketingByCode($code)
 * @method static ApiResponse getMarketings($data = array())
 * @method static ApiResponse getTotalMarketings($data = array())
 */
class AdminModelMarketingMarketing extends BaseModel 
{
    const MODEL_NAME = 'marketing/marketing';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse resize($filename, $width, $height)
 */
class AdminModelToolImage extends BaseModel 
{
    const MODEL_NAME = 'tool/image';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addUpload($name, $filename)
 * @method static ApiResponse deleteUpload($upload_id)
 * @method static ApiResponse getUpload($upload_id)
 * @method static ApiResponse getUploadByCode($code)
 * @method static ApiResponse getUploads($data = array())
 * @method static ApiResponse getTotalUploads()
 */
class AdminModelToolUpload extends BaseModel 
{
    const MODEL_NAME = 'tool/upload';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getTables()
 * @method static ApiResponse backup($tables)
 */
class AdminModelToolBackup extends BaseModel 
{
    const MODEL_NAME = 'tool/backup';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addVoucherTheme($data)
 * @method static ApiResponse editVoucherTheme($voucher_theme_id, $data)
 * @method static ApiResponse deleteVoucherTheme($voucher_theme_id)
 * @method static ApiResponse getVoucherTheme($voucher_theme_id)
 * @method static ApiResponse getVoucherThemes($data = array())
 * @method static ApiResponse getVoucherThemeDescriptions($voucher_theme_id)
 * @method static ApiResponse getTotalVoucherThemes()
 */
class AdminModelSaleVoucherTheme extends BaseModel 
{
    const MODEL_NAME = 'sale/voucher_theme';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addVoucher($data)
 * @method static ApiResponse editVoucher($voucher_id, $data)
 * @method static ApiResponse deleteVoucher($voucher_id)
 * @method static ApiResponse getVoucher($voucher_id)
 * @method static ApiResponse getVoucherByCode($code)
 * @method static ApiResponse getVouchers($data = array())
 * @method static ApiResponse getTotalVouchers()
 * @method static ApiResponse getTotalVouchersByVoucherThemeId($voucher_theme_id)
 * @method static ApiResponse getVoucherHistories($voucher_id, $start = 0, $limit = 10)
 * @method static ApiResponse getTotalVoucherHistories($voucher_id)
 */
class AdminModelSaleVoucher extends BaseModel 
{
    const MODEL_NAME = 'sale/voucher';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addReturn($data)
 * @method static ApiResponse editReturn($return_id, $data)
 * @method static ApiResponse deleteReturn($return_id)
 * @method static ApiResponse getReturn($return_id)
 * @method static ApiResponse getReturns($data = array())
 * @method static ApiResponse getTotalReturns($data = array())
 * @method static ApiResponse getTotalReturnsByReturnStatusId($return_status_id)
 * @method static ApiResponse getTotalReturnsByReturnReasonId($return_reason_id)
 * @method static ApiResponse getTotalReturnsByReturnActionId($return_action_id)
 * @method static ApiResponse addReturnHistory($return_id, $return_status_id, $comment, $notify)
 * @method static ApiResponse getReturnHistories($return_id, $start = 0, $limit = 10)
 * @method static ApiResponse getTotalReturnHistories($return_id)
 * @method static ApiResponse getTotalReturnHistoriesByReturnStatusId($return_status_id)
 */
class AdminModelSaleReturn extends BaseModel 
{
    const MODEL_NAME = 'sale/return';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse getOrders($data = array())
 * @method static ApiResponse getOrderProducts($order_id)
 * @method static ApiResponse getOrderOptions($order_id, $order_product_id)
 * @method static ApiResponse getOrderVouchers($order_id)
 * @method static ApiResponse getOrderVoucherByVoucherId($voucher_id)
 * @method static ApiResponse getOrderTotals($order_id)
 * @method static ApiResponse getTotalOrders($data = array())
 * @method static ApiResponse getTotalOrdersByStoreId($store_id)
 * @method static ApiResponse getTotalOrdersByOrderStatusId($order_status_id)
 * @method static ApiResponse getTotalOrdersByProcessingStatus()
 * @method static ApiResponse getTotalOrdersByCompleteStatus()
 * @method static ApiResponse getTotalOrdersByLanguageId($language_id)
 * @method static ApiResponse getTotalOrdersByCurrencyId($currency_id)
 * @method static ApiResponse getTotalSales($data = array())
 * @method static ApiResponse createInvoiceNo($order_id)
 * @method static ApiResponse getOrderHistories($order_id, $start = 0, $limit = 10)
 * @method static ApiResponse getTotalOrderHistories($order_id)
 * @method static ApiResponse getTotalOrderHistoriesByOrderStatusId($order_status_id)
 * @method static ApiResponse getEmailsByProductsOrdered($products, $start, $end)
 * @method static ApiResponse getTotalEmailsByProductsOrdered($products)
 */
class AdminModelSaleOrder extends BaseModel 
{
    const MODEL_NAME = 'sale/order';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getRecurrings($data)
 * @method static ApiResponse getRecurring($order_recurring_id)
 * @method static ApiResponse getRecurringTransactions($order_recurring_id)
 * @method static ApiResponse getTotalRecurrings($data)
 */
class AdminModelSaleRecurring extends BaseModel 
{
    const MODEL_NAME = 'sale/recurring';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse connector($merchant_id, $secret, $url)
 * @method static ApiResponse omRetrieve(KCConnector $connector, $order_id)
 * @method static ApiResponse omCancel(KCConnector $connector, $order_id)
 * @method static ApiResponse omCapture(KCConnector $connector, $order_id, $data)
 * @method static ApiResponse omRefund(KCConnector $connector, $order_id, $data)
 * @method static ApiResponse omExtendAuthorizationTime(KCConnector $connector, $order_id)
 * @method static ApiResponse omUpdateMerchantReference(KCConnector $connector, $order_id, $data)
 * @method static ApiResponse omUpdateAddress(KCConnector $connector, $order_id, $data)
 * @method static ApiResponse omReleaseAuthorization(KCConnector $connector, $order_id)
 * @method static ApiResponse omShippingInfo(KCConnector $connector, $order_id, $capture_id, $data)
 * @method static ApiResponse omCustomerDetails(KCConnector $connector, $order_id, $capture_id, $data)
 * @method static ApiResponse omTriggerSendOut(KCConnector $connector, $order_id, $capture_id)
 * @method static ApiResponse getConnector($accounts, $currency)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse checkForPaymentTaxes()
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse log($data)
 */
class AdminModelExtensionPaymentKlarnaCheckout extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/klarna_checkout';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($realex_remote_order_id, $status)
 * @method static ApiResponse capture($order_id, $amount)
 * @method static ApiResponse updateCaptureStatus($realex_remote_order_id, $status)
 * @method static ApiResponse updateForRebate($realex_remote_order_id, $pas_ref, $order_ref)
 * @method static ApiResponse rebate($order_id, $amount)
 * @method static ApiResponse updateRebateStatus($realex_remote_order_id, $status)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($realex_remote_order_id, $type, $total)
 * @method static ApiResponse logger($message)
 * @method static ApiResponse getTotalCaptured($realex_order_id)
 * @method static ApiResponse getTotalRebated($realex_order_id)
 */
class AdminModelExtensionPaymentRealexRemote extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/realex_remote';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($bluepay_hosted_order_id, $status)
 * @method static ApiResponse release($order_id, $amount)
 * @method static ApiResponse updateReleaseStatus($bluepay_hosted_order_id, $status)
 * @method static ApiResponse rebate($order_id, $amount)
 * @method static ApiResponse updateRebateStatus($bluepay_hosted_order_id, $status)
 * @method static ApiResponse updateTransactionId($bluepay_hosted_order_id, $transaction_id)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($bluepay_hosted_order_id, $type, $total)
 * @method static ApiResponse getTotalReleased($bluepay_hosted_order_id)
 * @method static ApiResponse getTotalRebated($bluepay_hosted_order_id)
 * @method static ApiResponse sendCurl($url, $post_data)
 * @method static ApiResponse adminCallback()
 * @method static ApiResponse logger($message)
 */
class AdminModelExtensionPaymentBluepayHosted extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/bluepay_hosted';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addRefundRecord($order, $result)
 * @method static ApiResponse capture($order_id, $capture_amount, $currency)
 * @method static ApiResponse updateCaptureStatus($eway_order_id, $status)
 * @method static ApiResponse updateTransactionId($eway_order_id, $transaction_id)
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($eway_order_id, $status)
 * @method static ApiResponse refund($order_id, $refund_amount)
 * @method static ApiResponse updateRefundStatus($eway_order_id, $status)
 * @method static ApiResponse sendCurl($url, $data)
 * @method static ApiResponse addTransaction($eway_order_id, $transactionid, $type, $total, $currency)
 * @method static ApiResponse getTotalCaptured($eway_order_id)
 * @method static ApiResponse getTotalRefunded($eway_order_id)
 */
class AdminModelExtensionPaymentEway extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/eway';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse getCurrencies()
 * @method static ApiResponse getWarehouses()
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse register($email, $password, $currency, $warehouse, $country, $environment)
 * @method static ApiResponse updateTrackingNumber($order_id, $tracking_number, $merchant_number)
 * @method static ApiResponse enablePiliExpress()
 * @method static ApiResponse disablePiliExpress()
 * @method static ApiResponse log($data)
 */
class AdminModelExtensionPaymentPilibaba extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pilibaba';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($sagepay_direct_order_id, $status)
 * @method static ApiResponse release($order_id, $amount)
 * @method static ApiResponse updateReleaseStatus($sagepay_direct_order_id, $status)
 * @method static ApiResponse rebate($order_id, $amount)
 * @method static ApiResponse updateRebateStatus($sagepay_direct_order_id, $status)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($sagepay_direct_order_id, $type, $total)
 * @method static ApiResponse getTotalReleased($sagepay_direct_order_id)
 * @method static ApiResponse getTotalRebated($sagepay_direct_order_id)
 * @method static ApiResponse sendCurl($url, $payment_data)
 * @method static ApiResponse logger($title, $data)
 */
class AdminModelExtensionPaymentSagepayDirect extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/sagepay_direct';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($bluepay_redirect_order_id, $status)
 * @method static ApiResponse release($order_id, $amount)
 * @method static ApiResponse updateReleaseStatus($bluepay_redirect_order_id, $status)
 * @method static ApiResponse rebate($order_id, $amount)
 * @method static ApiResponse updateRebateStatus($bluepay_redirect_order_id, $status)
 * @method static ApiResponse updateTransactionId($bluepay_redirect_order_id, $transaction_id)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($bluepay_redirect_order_id, $type, $total)
 * @method static ApiResponse getTotalReleased($bluepay_redirect_order_id)
 * @method static ApiResponse getTotalRebated($bluepay_redirect_order_id)
 * @method static ApiResponse sendCurl($url, $post_data)
 * @method static ApiResponse callback()
 * @method static ApiResponse logger($message)
 */
class AdminModelExtensionPaymentBluepayRedirect extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/bluepay_redirect';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse getPayPalOrder($order_id)
 * @method static ApiResponse editPayPalOrderStatus($order_id, $capture_status)
 * @method static ApiResponse addTransaction($transaction_data, $request_data = array())
 * @method static ApiResponse updateTransaction($transaction)
 * @method static ApiResponse getPaypalOrderByTransactionId($transaction_id)
 * @method static ApiResponse getFailedTransaction($paypal_order_transaction_id)
 * @method static ApiResponse getLocalTransaction($transaction_id)
 * @method static ApiResponse getTransaction($transaction_id)
 * @method static ApiResponse getCurrencies()
 * @method static ApiResponse getOrderId($transaction_id)
 * @method static ApiResponse getCapturedTotal($paypal_order_id)
 * @method static ApiResponse getRefundedTotal($paypal_order_id)
 * @method static ApiResponse getRefundedTotalByParentId($transaction_id)
 * @method static ApiResponse cleanReturn($data)
 * @method static ApiResponse log($data, $title = null)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse totalCaptured($paypal_order_id)
 * @method static ApiResponse getTransactions($paypal_order_id)
 * @method static ApiResponse getTokens($test)
 * @method static ApiResponse getUserInfo($merchant_id, $test, $access_token)
 * @method static ApiResponse call($data)
 */
class AdminModelExtensionPaymentPpExpress extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pp_express';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse createClient($credentials)
 * @method static ApiResponse verifyCredentials($client)
 * @method static ApiResponse getPayment($client, $payment_id)
 * @method static ApiResponse getRefunds($client, $payment_id)
 * @method static ApiResponse refundPayment($client, $payment_id, $amount, $description)
 * @method static ApiResponse log($data)
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 */
class AdminModelExtensionPaymentCardinity extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/cardinity';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addRevisedTransaction($data = array())
 * @method static ApiResponse getCustomerIdByOrderId($order_id)
 * @method static ApiResponse getInitialPayments()
 * @method static ApiResponse getMonths()
 * @method static ApiResponse getPayPalProfileIds()
 * @method static ApiResponse getRevisedTransaction($id)
 * @method static ApiResponse getRemainingAmount($amount, $downpayment_amount, $payment_amounts, $transaction = 2)
 * @method static ApiResponse getRevisedTransactions($id)
 * @method static ApiResponse getStatusLabel($id)
 * @method static ApiResponse getTransaction($id)
 * @method static ApiResponse getTransactions($data = array())
 * @method static ApiResponse getTotalTransactions($data = array())
 * @method static ApiResponse getTransactionByLayBuyRefId($laybuy_ref_id)
 * @method static ApiResponse getTransactionByOrderId($order_id)
 * @method static ApiResponse getTransactionStatuses()
 * @method static ApiResponse install()
 * @method static ApiResponse log($data, $step = 6)
 * @method static ApiResponse uninstall()
 * @method static ApiResponse updateOrderStatus($order_id, $order_status_id, $comment)
 * @method static ApiResponse updateRevisedTransaction($id, $data = array())
 * @method static ApiResponse updateTransaction($id, $status, $report, $transaction)
 * @method static ApiResponse updateTransactionStatus($id, $status)
 */
class AdminModelExtensionPaymentLaybuy extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/laybuy';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse getTotalReleased($g2apay_order_id)
 * @method static ApiResponse refund($g2apay_order, $amount)
 * @method static ApiResponse updateRefundStatus($g2apay_order_id, $status)
 * @method static ApiResponse addTransaction($g2apay_order_id, $type, $total)
 * @method static ApiResponse getTotalRefunded($g2apay_order_id)
 * @method static ApiResponse sendCurl($url, $fields)
 * @method static ApiResponse logger($message)
 */
class AdminModelExtensionPaymentG2apay extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/g2apay';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($sagepay_server_order_id, $status)
 * @method static ApiResponse release($order_id, $amount)
 * @method static ApiResponse updateReleaseStatus($sagepay_server_order_id, $status)
 * @method static ApiResponse updateForRebate($sagepay_server_order_id, $order_ref)
 * @method static ApiResponse rebate($order_id, $amount)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($sagepay_server_order_id, $type, $total)
 * @method static ApiResponse getTotalReleased($sagepay_server_order_id)
 * @method static ApiResponse getTotalRebated($sagepay_server_order_id)
 * @method static ApiResponse sendCurl($url, $payment_data)
 * @method static ApiResponse logger($title, $data)
 */
class AdminModelExtensionPaymentSagepayServer extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/sagepay_server';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse log($message)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse updateOrderStatus($order_id, $status)
 * @method static ApiResponse addTransaction($data)
 * @method static ApiResponse getTransactions($order_id)
 * @method static ApiResponse getTransaction($transaction_reference)
 * @method static ApiResponse call($data)
 */
class AdminModelExtensionPaymentPpPayflowIframe extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pp_payflow_iframe';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse getTotalCaptured($paypal_iframe_order_id)
 * @method static ApiResponse getTotalRefunded($paypal_iframe_order_id)
 * @method static ApiResponse getTotalRefundedTransaction($transaction_id)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse call($data)
 * @method static ApiResponse updateOrder($capture_status, $order_id)
 * @method static ApiResponse updateTransaction($transaction)
 * @method static ApiResponse addTransaction($transaction_data, $request_data = array())
 * @method static ApiResponse log($data, $title = null)
 * @method static ApiResponse getTransaction($transaction_id)
 * @method static ApiResponse getOrderId($transaction_id)
 * @method static ApiResponse updateAuthorizationId($paypal_iframe_order_id, $authorization_id)
 * @method static ApiResponse updateRefundTransaction($transaction_id, $transaction_type)
 * @method static ApiResponse getFailedTransaction($paypl_iframe_order_transaction_id)
 * @method static ApiResponse getLocalTransaction($transaction_id)
 */
class AdminModelExtensionPaymentPpProIframe extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pp_pro_iframe';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse getTotalCaptured($cardconnect_order_id)
 * @method static ApiResponse inquire($order_info, $retref)
 * @method static ApiResponse capture($order_info, $amount)
 * @method static ApiResponse refund($order_info, $amount)
 * @method static ApiResponse void($order_info, $retref)
 * @method static ApiResponse updateTransactionStatusByRetref($retref, $status)
 * @method static ApiResponse addTransaction($cardconnect_order_id, $type, $retref, $amount, $status)
 * @method static ApiResponse log($data)
 */
class AdminModelExtensionPaymentCardconnect extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/cardconnect';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getTransaction($squareup_transaction_id)
 * @method static ApiResponse getTransactions($data)
 * @method static ApiResponse getTotalTransactions($data)
 * @method static ApiResponse updateTransaction($squareup_transaction_id, $type, $refunds = array())
 * @method static ApiResponse getOrderStatusId($order_id, $transaction_status = null)
 * @method static ApiResponse editOrderRecurringStatus($order_recurring_id, $status)
 * @method static ApiResponse createTables()
 * @method static ApiResponse dropTables()
 */
class AdminModelExtensionPaymentSquareup extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/squareup';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($securetrading_pp_order_id, $status)
 * @method static ApiResponse release($order_id, $amount)
 * @method static ApiResponse updateReleaseStatus($securetrading_pp_order_id, $status)
 * @method static ApiResponse updateForRebate($securetrading_pp_order_id, $order_ref)
 * @method static ApiResponse rebate($order_id, $refunded_amount)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($securetrading_pp_order_id, $type, $total)
 * @method static ApiResponse getTotalReleased($securetrading_pp_order_id)
 * @method static ApiResponse getTotalRebated($securetrading_pp_order_id)
 * @method static ApiResponse increaseRefundedAmount($order_id, $amount)
 * @method static ApiResponse call($data)
 * @method static ApiResponse logger($message)
 */
class AdminModelExtensionPaymentSecuretradingPp extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/securetrading_pp';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse refund($order_id, $amount)
 * @method static ApiResponse updateRefundStatus($worldpay_order_id, $status)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($worldpay_order_id, $type, $total)
 * @method static ApiResponse getTotalReleased($worldpay_order_id)
 * @method static ApiResponse getTotalRefunded($worldpay_order_id)
 * @method static ApiResponse sendCurl($url, $order)
 * @method static ApiResponse logger($message)
 */
class AdminModelExtensionPaymentWorldpay extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/worldpay';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($globalpay_order_id, $status)
 * @method static ApiResponse capture($order_id, $amount)
 * @method static ApiResponse updateCaptureStatus($globalpay_order_id, $status)
 * @method static ApiResponse updateForRebate($globalpay_order_id, $pas_ref, $order_ref)
 * @method static ApiResponse rebate($order_id, $amount)
 * @method static ApiResponse updateRebateStatus($globalpay_order_id, $status)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($globalpay_order_id, $type, $total)
 * @method static ApiResponse logger($message)
 * @method static ApiResponse getTotalCaptured($globalpay_order_id)
 * @method static ApiResponse getTotalRebated($globalpay_order_id)
 */
class AdminModelExtensionPaymentGlobalpay extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/globalpay';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($realex_order_id, $status)
 * @method static ApiResponse capture($order_id, $amount)
 * @method static ApiResponse updateCaptureStatus($realex_order_id, $status)
 * @method static ApiResponse updateForRebate($realex_order_id, $pas_ref, $order_ref)
 * @method static ApiResponse rebate($order_id, $amount)
 * @method static ApiResponse updateRebateStatus($realex_order_id, $status)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($realex_order_id, $type, $total)
 * @method static ApiResponse logger($message)
 * @method static ApiResponse getTotalCaptured($realex_order_id)
 * @method static ApiResponse getTotalRebated($realex_order_id)
 */
class AdminModelExtensionPaymentRealex extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/realex';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($securetrading_ws_order_id, $status)
 * @method static ApiResponse release($order_id, $amount)
 * @method static ApiResponse updateReleaseStatus($securetrading_ws_order_id, $status)
 * @method static ApiResponse updateForRebate($securetrading_ws_order_id, $order_ref)
 * @method static ApiResponse rebate($order_id, $refunded_amount)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($securetrading_ws_order_id, $type, $total)
 * @method static ApiResponse getTotalReleased($securetrading_ws_order_id)
 * @method static ApiResponse getTotalRebated($securetrading_ws_order_id)
 * @method static ApiResponse increaseRefundedAmount($order_id, $amount)
 * @method static ApiResponse getCsv($data)
 * @method static ApiResponse call($data)
 * @method static ApiResponse logger($message)
 */
class AdminModelExtensionPaymentSecuretradingWs extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/securetrading_ws';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($firstdata_order_id, $status)
 * @method static ApiResponse capture($order_id, $amount)
 * @method static ApiResponse updateCaptureStatus($firstdata_order_id, $status)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($firstdata_order_id, $type, $total)
 * @method static ApiResponse logger($message)
 * @method static ApiResponse getTotalCaptured($firstdata_order_id)
 * @method static ApiResponse mapCurrency($code)
 */
class AdminModelExtensionPaymentFirstdata extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/firstdata';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse cancel($amazon_login_pay_order)
 * @method static ApiResponse updateCancelStatus($amazon_login_pay_order_id, $status)
 * @method static ApiResponse capture($amazon_login_pay_order, $amount)
 * @method static ApiResponse closeOrderRef($amazon_order_reference_id)
 * @method static ApiResponse updateCaptureStatus($amazon_login_pay_order_id, $status)
 * @method static ApiResponse refund($amazon_login_pay_order, $amount)
 * @method static ApiResponse getUnCaptured($amazon_login_pay_order_id)
 * @method static ApiResponse updateRefundStatus($amazon_login_pay_order_id, $status)
 * @method static ApiResponse getCapturesRemaining($amazon_login_pay_order_id)
 * @method static ApiResponse addTransaction($amazon_login_pay_order_id, $type, $status, $total, $amazon_authorization_id = null, $amazon_capture_id = null, $amazon_refund_id = null)
 * @method static ApiResponse getTotalCaptured($amazon_login_pay_order_id)
 * @method static ApiResponse getTotalRefunded($amazon_login_pay_order_id)
 * @method static ApiResponse validateDetails($data)
 * @method static ApiResponse offAmazon($Action, $parameter_data, $post_data = array())
 * @method static ApiResponse sendCurl($url, $parameters)
 * @method static ApiResponse logger($message)
 */
class AdminModelExtensionPaymentAmazonLoginPay extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/amazon_login_pay';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse void($order_id)
 * @method static ApiResponse updateVoidStatus($globalpay_remote_order_id, $status)
 * @method static ApiResponse capture($order_id, $amount)
 * @method static ApiResponse updateCaptureStatus($globalpay_remote_order_id, $status)
 * @method static ApiResponse updateForRebate($globalpay_remote_order_id, $pas_ref, $order_ref)
 * @method static ApiResponse rebate($order_id, $amount)
 * @method static ApiResponse updateRebateStatus($globalpay_remote_order_id, $status)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($globalpay_remote_order_id, $type, $total)
 * @method static ApiResponse logger($message)
 * @method static ApiResponse getTotalCaptured($globalpay_order_id)
 * @method static ApiResponse getTotalRebated($globalpay_order_id)
 */
class AdminModelExtensionPaymentGlobalpayRemote extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/globalpay_remote';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getAllPlans()
 * @method static ApiResponse getLookupByOrderId($order_id)
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 */
class AdminModelExtensionPaymentDivido extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/divido';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse generateToken($gateway, $data = array())
 * @method static ApiResponse getTransaction($gateway, $transaction_id)
 * @method static ApiResponse getTransactions($gateway, $data = array())
 * @method static ApiResponse voidTransaction($gateway, $transaction_id)
 * @method static ApiResponse settleTransaction($gateway, $transaction_id, $amount)
 * @method static ApiResponse refundTransaction($gateway, $transaction_id, $amount)
 * @method static ApiResponse verifyCredentials($gateway)
 * @method static ApiResponse verifyMerchantAccount($gateway, $merchant_account_id)
 * @method static ApiResponse setGateway($access_token)
 * @method static ApiResponse log($data)
 */
class AdminModelExtensionPaymentPpBraintree extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/pp_braintree';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse call($xml)
 * @method static ApiResponse void($order_ref, $tdate)
 * @method static ApiResponse updateVoidStatus($firstdata_remote_order_id, $status)
 * @method static ApiResponse capture($order_ref, $total, $currency_code)
 * @method static ApiResponse updateCaptureStatus($firstdata_remote_order_id, $status)
 * @method static ApiResponse refund($order_ref, $total, $currency_code)
 * @method static ApiResponse updateRefundStatus($firstdata_remote_order_id, $status)
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addTransaction($firstdata_remote_order_id, $type, $total)
 * @method static ApiResponse logger($message)
 * @method static ApiResponse getTotalCaptured($firstdata_order_id)
 * @method static ApiResponse getTotalRefunded($firstdata_order_id)
 * @method static ApiResponse mapCurrency($code)
 */
class AdminModelExtensionPaymentFirstdataRemote extends BaseModel 
{
    const MODEL_NAME = 'extension/payment/firstdata_remote';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getCoupons($data = array())
 * @method static ApiResponse getTotalCoupons($data = array())
 */
class AdminModelExtensionReportCoupon extends BaseModel 
{
    const MODEL_NAME = 'extension/report/coupon';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getActivities()
 */
class AdminModelExtensionReportActivity extends BaseModel 
{
    const MODEL_NAME = 'extension/report/activity';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getTotalCustomersByDay()
 * @method static ApiResponse getTotalCustomersByWeek()
 * @method static ApiResponse getTotalCustomersByMonth()
 * @method static ApiResponse getTotalCustomersByYear()
 * @method static ApiResponse getOrders($data = array())
 * @method static ApiResponse getTotalOrders($data = array())
 * @method static ApiResponse getRewardPoints($data = array())
 * @method static ApiResponse getTotalRewardPoints($data = array())
 * @method static ApiResponse getCustomerActivities($data = array())
 * @method static ApiResponse getTotalCustomerActivities($data = array())
 * @method static ApiResponse getCustomerSearches($data = array())
 * @method static ApiResponse getTotalCustomerSearches($data = array())
 */
class AdminModelExtensionReportCustomer extends BaseModel 
{
    const MODEL_NAME = 'extension/report/customer';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getProductsViewed($data = array())
 * @method static ApiResponse getTotalProductViews()
 * @method static ApiResponse getTotalProductsViewed()
 * @method static ApiResponse reset()
 * @method static ApiResponse getPurchased($data = array())
 * @method static ApiResponse getTotalPurchased($data)
 */
class AdminModelExtensionReportProduct extends BaseModel 
{
    const MODEL_NAME = 'extension/report/product';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getTransactions($data = array())
 * @method static ApiResponse getTotalTransactions($data = array())
 */
class AdminModelExtensionReportCustomerTransaction extends BaseModel 
{
    const MODEL_NAME = 'extension/report/customer_transaction';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getMarketing($data = array())
 * @method static ApiResponse getTotalMarketing($data = array())
 */
class AdminModelExtensionReportMarketing extends BaseModel 
{
    const MODEL_NAME = 'extension/report/marketing';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getReturns($data = array())
 * @method static ApiResponse getTotalReturns($data = array())
 */
class AdminModelExtensionReportReturn extends BaseModel 
{
    const MODEL_NAME = 'extension/report/return';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getTotalSales($data = array())
 * @method static ApiResponse getTotalOrdersByCountry()
 * @method static ApiResponse getTotalOrdersByDay()
 * @method static ApiResponse getTotalOrdersByWeek()
 * @method static ApiResponse getTotalOrdersByMonth()
 * @method static ApiResponse getTotalOrdersByYear()
 * @method static ApiResponse getOrders($data = array())
 * @method static ApiResponse getTotalOrders($data = array())
 * @method static ApiResponse getTaxes($data = array())
 * @method static ApiResponse getTotalTaxes($data = array())
 * @method static ApiResponse getShipping($data = array())
 * @method static ApiResponse getTotalShipping($data = array())
 */
class AdminModelExtensionReportSale extends BaseModel 
{
    const MODEL_NAME = 'extension/report/sale';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getActivities()
 */
class AdminModelExtensionDashboardActivity extends BaseModel 
{
    const MODEL_NAME = 'extension/dashboard/activity';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getTotalOnline($data = array())
 */
class AdminModelExtensionDashboardOnline extends BaseModel 
{
    const MODEL_NAME = 'extension/dashboard/online';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getTotalOrdersByCountry()
 */
class AdminModelExtensionDashboardMap extends BaseModel 
{
    const MODEL_NAME = 'extension/dashboard/map';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getTotalSales($data = array())
 * @method static ApiResponse getTotalOrdersByCountry()
 * @method static ApiResponse getTotalOrdersByDay()
 * @method static ApiResponse getTotalOrdersByWeek()
 * @method static ApiResponse getTotalOrdersByMonth()
 * @method static ApiResponse getTotalOrdersByYear()
 * @method static ApiResponse getOrders($data = array())
 * @method static ApiResponse getTotalOrders($data = array())
 * @method static ApiResponse getTaxes($data = array())
 * @method static ApiResponse getTotalTaxes($data = array())
 * @method static ApiResponse getShipping($data = array())
 * @method static ApiResponse getTotalShipping($data = array())
 */
class AdminModelExtensionDashboardSale extends BaseModel 
{
    const MODEL_NAME = 'extension/dashboard/sale';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getTotalOrdersByDay()
 * @method static ApiResponse getTotalOrdersByWeek()
 * @method static ApiResponse getTotalOrdersByMonth()
 * @method static ApiResponse getTotalOrdersByYear()
 * @method static ApiResponse getTotalCustomersByDay()
 * @method static ApiResponse getTotalCustomersByWeek()
 * @method static ApiResponse getTotalCustomersByMonth()
 * @method static ApiResponse getTotalCustomersByYear()
 */
class AdminModelExtensionDashboardChart extends BaseModel 
{
    const MODEL_NAME = 'extension/dashboard/chart';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse import($string)
 * @method static ApiResponse getGoogleBaseCategories($data = array())
 * @method static ApiResponse addCategory($data)
 * @method static ApiResponse deleteCategory($category_id)
 * @method static ApiResponse getCategories($data = array())
 * @method static ApiResponse getTotalCategories()
 */
class AdminModelExtensionFeedGoogleBase extends BaseModel 
{
    const MODEL_NAME = 'extension/feed/google_base';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse getOrder($order_id)
 * @method static ApiResponse addOrderHistory($order_id, $data, $store_id = 0)
 */
class AdminModelExtensionFraudFraudlabspro extends BaseModel 
{
    const MODEL_NAME = 'extension/fraud/fraudlabspro';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse getOrder($order_id)
 */
class AdminModelExtensionFraudMaxmind extends BaseModel 
{
    const MODEL_NAME = 'extension/fraud/maxmind';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse addIp($ip)
 * @method static ApiResponse removeIp($ip)
 * @method static ApiResponse getIps($start = 0, $limit = 10)
 * @method static ApiResponse getTotalIps()
 * @method static ApiResponse getTotalIpsByIp($ip)
 */
class AdminModelExtensionFraudIp extends BaseModel 
{
    const MODEL_NAME = 'extension/fraud/ip';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse patch()
 * @method static ApiResponse verifyConfig($data)
 * @method static ApiResponse saveProduct($product_id, $data_array)
 * @method static ApiResponse deleteSaved($product_id, $var = '')
 * @method static ApiResponse getSavedProducts()
 * @method static ApiResponse getSavedProductsData()
 * @method static ApiResponse getProduct($product_id, $var = '')
 * @method static ApiResponse getProductCategory($product_id, $var = '')
 * @method static ApiResponse setProductUploaded($product_id, $insertion_id, $var = '')
 * @method static ApiResponse resetUploaded($insertion_id)
 * @method static ApiResponse getProductStatus($product_id)
 * @method static ApiResponse getProductErrors($product_id, $version = 2)
 * @method static ApiResponse getProductsWithErrors()
 * @method static ApiResponse deleteProduct($product_id)
 * @method static ApiResponse linkProduct($amazonus_sku, $product_id, $var = '')
 * @method static ApiResponse removeProductLink($amazonus_sku)
 * @method static ApiResponse removeAdvancedErrors($product_id)
 * @method static ApiResponse getProductLinks($product_id = 'all')
 * @method static ApiResponse getUnlinkedProducts()
 * @method static ApiResponse getOrderStatusString($order_id)
 * @method static ApiResponse updateAmazonusOrderTracking($order_id, $courier_id, $courier_from_list, $tracking_no)
 * @method static ApiResponse getAmazonusOrderId($order_id)
 * @method static ApiResponse getAmazonusOrderedProducts($order_id)
 * @method static ApiResponse getProductQuantity($product_id, $var = '')
 * @method static ApiResponse getProductSearchTotal($data = array())
 * @method static ApiResponse getProductSearch($data = array())
 * @method static ApiResponse updateAmazonSkusQuantities($skus)
 * @method static ApiResponse getTotalUnlinkedItemsFromReport()
 * @method static ApiResponse getUnlinkedItemsFromReport($limit = 100, $page = 1)
 * @method static ApiResponse deleteListingReports()
 */
class AdminModelExtensionOpenbayAmazonus extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/amazonus';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse patch()
 * @method static ApiResponse countFbaOrders()
 */
class AdminModelExtensionOpenbayFba extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/fba';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getStatus($product_id)
 * @method static ApiResponse totalLinked()
 * @method static ApiResponse addLink($product_id, $etsy_item_id, $status_id = 0)
 * @method static ApiResponse loadLinked($limit = 100, $page = 1)
 */
class AdminModelExtensionOpenbayEtsyProduct extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/etsy_product';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse search($search_string, $marketplace)
 * @method static ApiResponse getProductByAsin($asin, $market)
 * @method static ApiResponse getBestPrice($asin, $condition, $marketplace)
 * @method static ApiResponse simpleListing($data)
 * @method static ApiResponse getBrowseNodes($request)
 * @method static ApiResponse doBulkSearch($search_data)
 * @method static ApiResponse deleteSearchResults($marketplace, $product_ids)
 * @method static ApiResponse doBulkListing($data)
 */
class AdminModelExtensionOpenbayAmazonListing extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/amazon_listing';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getTaxRate($class_id)
 * @method static ApiResponse countImportImages()
 * @method static ApiResponse getProductOptions($product_id)
 * @method static ApiResponse repairLinks()
 * @method static ApiResponse searchEbayCatalog($search, $category_id, $page = 1)
 * @method static ApiResponse getPartsCompatibilityOptions($category_id)
 * @method static ApiResponse getPartsCompatibilityValues($filters)
 * @method static ApiResponse getItemRecommendations($filters)
 */
class AdminModelExtensionOpenbayEbayProduct extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/ebay_product';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse patch()
 * @method static ApiResponse verifyAccount()
 */
class AdminModelExtensionOpenbayEtsy extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/etsy';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse add($data)
 * @method static ApiResponse edit($id, $data)
 * @method static ApiResponse delete($id)
 * @method static ApiResponse get($id)
 * @method static ApiResponse getAll()
 */
class AdminModelExtensionOpenbayEbayTemplate extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/ebay_template';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse patch()
 * @method static ApiResponse verifyConfig($data)
 * @method static ApiResponse saveProduct($product_id, $data_array)
 * @method static ApiResponse deleteSaved($product_id, $var = '')
 * @method static ApiResponse getSavedProducts()
 * @method static ApiResponse getSavedProductsData()
 * @method static ApiResponse getProduct($product_id, $var = '')
 * @method static ApiResponse getProductCategory($product_id, $var = '')
 * @method static ApiResponse setProductUploaded($product_id, $insertion_id, $var = '')
 * @method static ApiResponse resetUploaded($insertion_id)
 * @method static ApiResponse getProductStatus($product_id)
 * @method static ApiResponse getProductErrors($product_id, $version = 2)
 * @method static ApiResponse getProductsWithErrors()
 * @method static ApiResponse deleteProduct($product_id)
 * @method static ApiResponse linkProduct($amazon_sku, $product_id, $var = '')
 * @method static ApiResponse removeProductLink($amazon_sku)
 * @method static ApiResponse removeAdvancedErrors($product_id)
 * @method static ApiResponse getProductLinks($product_id = 'all')
 * @method static ApiResponse getUnlinkedProducts()
 * @method static ApiResponse getOrderStatusString($order_id)
 * @method static ApiResponse updateAmazonOrderTracking($order_id, $courier_id, $courier_from_list, $tracking_no)
 * @method static ApiResponse getAmazonOrderId($order_id)
 * @method static ApiResponse getAmazonOrderedProducts($order_id)
 * @method static ApiResponse getProductQuantity($product_id, $var = '')
 * @method static ApiResponse getProductSearchTotal($data = array())
 * @method static ApiResponse getProductSearch($data = array())
 * @method static ApiResponse updateAmazonSkusQuantities($skus)
 * @method static ApiResponse deleteListingReports($marketplace)
 * @method static ApiResponse getTotalUnlinkedItemsFromReport($marketplace)
 * @method static ApiResponse getUnlinkedItemsFromReport($marketplace, $limit = 100, $page = 1)
 * @method static ApiResponse getAsinLink($asin, $marketplace)
 */
class AdminModelExtensionOpenbayAmazon extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/amazon';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse install()
 * @method static ApiResponse uninstall()
 * @method static ApiResponse patch()
 * @method static ApiResponse totalLinked()
 * @method static ApiResponse loadLinked($limit = 100, $page = 1)
 * @method static ApiResponse loadLinkedStatus($item_ids)
 * @method static ApiResponse loadUnlinked($limit = 200, $page = 1, $filter = array())
 * @method static ApiResponse loadItemLinks()
 * @method static ApiResponse saveItemLink($data)
 * @method static ApiResponse getSellerStoreCategories()
 * @method static ApiResponse getCategory($parent)
 * @method static ApiResponse getSuggestedCategories($qry)
 * @method static ApiResponse getShippingService($international, $type)
 * @method static ApiResponse getShippingLocations()
 * @method static ApiResponse getEbayCategorySpecifics($category_id)
 * @method static ApiResponse getCategoryFeatures($category_id)
 * @method static ApiResponse getSellerSummary()
 * @method static ApiResponse getPaymentTypes()
 * @method static ApiResponse getPopularCategories()
 * @method static ApiResponse ebayVerifyAddItem($data, $options)
 * @method static ApiResponse ebayAddItem($data, $options)
 * @method static ApiResponse logCategoryUsed($category_id)
 * @method static ApiResponse getProductStock($id)
 * @method static ApiResponse getUsage()
 * @method static ApiResponse getPlans()
 * @method static ApiResponse getMyPlan()
 * @method static ApiResponse getLiveListingArray()
 * @method static ApiResponse verifyCredentials()
 * @method static ApiResponse editSave($data)
 * @method static ApiResponse getProductAttributes($product_id)
 */
class AdminModelExtensionOpenbayEbay extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/ebay';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse patch()
 * @method static ApiResponse updateTest()
 * @method static ApiResponse updateCheckVersion($beta = 0)
 * @method static ApiResponse updateDownload($beta = 0)
 * @method static ApiResponse updateExtract()
 * @method static ApiResponse updateRemove($beta = 0)
 * @method static ApiResponse updateUpdateVersion($beta = 0)
 * @method static ApiResponse setUrl($url)
 * @method static ApiResponse getNotifications()
 * @method static ApiResponse version()
 * @method static ApiResponse faqGet($route)
 * @method static ApiResponse faqIsDismissed($route)
 * @method static ApiResponse faqDismiss($route)
 * @method static ApiResponse faqClear()
 * @method static ApiResponse faqDbTableCheck()
 * @method static ApiResponse requirementTest()
 * @method static ApiResponse getTotalProducts($data = array())
 * @method static ApiResponse getProducts($data = array())
 * @method static ApiResponse addOrderHistory($order_id, $data, $api_login)
 * @method static ApiResponse apiLogin($key)
 * @method static ApiResponse storeImage($filename, $width, $height, $sub_directory = '')
 */
class AdminModelExtensionOpenbayOpenbay extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/openbay';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse search($search_string)
 * @method static ApiResponse getProductByAsin($asin)
 * @method static ApiResponse getBestPrice($asin, $condition)
 * @method static ApiResponse simpleListing($data)
 * @method static ApiResponse getBrowseNodes($request)
 * @method static ApiResponse deleteSearchResults($product_ids)
 * @method static ApiResponse doBulkListing($data)
 * @method static ApiResponse doBulkSearch($search_data)
 */
class AdminModelExtensionOpenbayAmazonusListing extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/amazonus_listing';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse getTotalOrders($data = array())
 * @method static ApiResponse getOrders($data = array())
 * @method static ApiResponse getOrder($order_id)
 */
class AdminModelExtensionOpenbayOrder extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/order';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse add($data)
 * @method static ApiResponse edit($id, $data)
 * @method static ApiResponse delete($id)
 * @method static ApiResponse get($id)
 * @method static ApiResponse getAll($type = '')
 * @method static ApiResponse getTypes()
 * @method static ApiResponse getDefault($type)
 */
class AdminModelExtensionOpenbayEbayProfile extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/ebay_profile';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse version()
 */
class AdminModelExtensionOpenbayVersion extends BaseModel 
{
    const MODEL_NAME = 'extension/openbay/version';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addManufacturer($data)
 * @method static ApiResponse editManufacturer($manufacturer_id, $data)
 * @method static ApiResponse deleteManufacturer($manufacturer_id)
 * @method static ApiResponse getManufacturer($manufacturer_id)
 * @method static ApiResponse getManufacturers($data = array())
 * @method static ApiResponse getManufacturerStores($manufacturer_id)
 * @method static ApiResponse getManufacturerSeoUrls($manufacturer_id)
 * @method static ApiResponse getTotalManufacturers()
 */
class AdminModelCatalogManufacturer extends BaseModel 
{
    const MODEL_NAME = 'catalog/manufacturer';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addDownload($data)
 * @method static ApiResponse editDownload($download_id, $data)
 * @method static ApiResponse deleteDownload($download_id)
 * @method static ApiResponse getDownload($download_id)
 * @method static ApiResponse getDownloads($data = array())
 * @method static ApiResponse getDownloadDescriptions($download_id)
 * @method static ApiResponse getTotalDownloads()
 */
class AdminModelCatalogDownload extends BaseModel 
{
    const MODEL_NAME = 'catalog/download';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addFilter($data)
 * @method static ApiResponse editFilter($filter_group_id, $data)
 * @method static ApiResponse deleteFilter($filter_group_id)
 * @method static ApiResponse getFilterGroup($filter_group_id)
 * @method static ApiResponse getFilterGroups($data = array())
 * @method static ApiResponse getFilterGroupDescriptions($filter_group_id)
 * @method static ApiResponse getFilter($filter_id)
 * @method static ApiResponse getFilters($data)
 * @method static ApiResponse getFilterDescriptions($filter_group_id)
 * @method static ApiResponse getTotalFilterGroups()
 */
class AdminModelCatalogFilter extends BaseModel 
{
    const MODEL_NAME = 'catalog/filter';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addCategory($data)
 * @method static ApiResponse editCategory($category_id, $data)
 * @method static ApiResponse deleteCategory($category_id)
 * @method static ApiResponse repairCategories($parent_id = 0)
 * @method static ApiResponse getCategory($category_id)
 * @method static ApiResponse getCategories($data = array())
 * @method static ApiResponse getCategoryDescriptions($category_id)
 * @method static ApiResponse getCategoryPath($category_id)
 * @method static ApiResponse getCategoryFilters($category_id)
 * @method static ApiResponse getCategoryStores($category_id)
 * @method static ApiResponse getCategorySeoUrls($category_id)
 * @method static ApiResponse getCategoryLayouts($category_id)
 * @method static ApiResponse getTotalCategories()
 * @method static ApiResponse getTotalCategoriesByLayoutId($layout_id)
 */
class AdminModelCatalogCategory extends BaseModel 
{
    const MODEL_NAME = 'catalog/category';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addInformation($data)
 * @method static ApiResponse editInformation($information_id, $data)
 * @method static ApiResponse deleteInformation($information_id)
 * @method static ApiResponse getInformation($information_id)
 * @method static ApiResponse getInformations($data = array())
 * @method static ApiResponse getInformationDescriptions($information_id)
 * @method static ApiResponse getInformationStores($information_id)
 * @method static ApiResponse getInformationSeoUrls($information_id)
 * @method static ApiResponse getInformationLayouts($information_id)
 * @method static ApiResponse getTotalInformations()
 * @method static ApiResponse getTotalInformationsByLayoutId($layout_id)
 */
class AdminModelCatalogInformation extends BaseModel 
{
    const MODEL_NAME = 'catalog/information';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addOption($data)
 * @method static ApiResponse editOption($option_id, $data)
 * @method static ApiResponse deleteOption($option_id)
 * @method static ApiResponse getOption($option_id)
 * @method static ApiResponse getOptions($data = array())
 * @method static ApiResponse getOptionDescriptions($option_id)
 * @method static ApiResponse getOptionValue($option_value_id)
 * @method static ApiResponse getOptionValues($option_id)
 * @method static ApiResponse getOptionValueDescriptions($option_id)
 * @method static ApiResponse getTotalOptions()
 */
class AdminModelCatalogOption extends BaseModel 
{
    const MODEL_NAME = 'catalog/option';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addProduct($data)
 * @method static ApiResponse editProduct($product_id, $data)
 * @method static ApiResponse copyProduct($product_id)
 * @method static ApiResponse deleteProduct($product_id)
 * @method static ApiResponse getProduct($product_id)
 * @method static ApiResponse getProducts($data = array())
 * @method static ApiResponse getProductsByCategoryId($category_id)
 * @method static ApiResponse getProductDescriptions($product_id)
 * @method static ApiResponse getProductCategories($product_id)
 * @method static ApiResponse getProductFilters($product_id)
 * @method static ApiResponse getProductAttributes($product_id)
 * @method static ApiResponse getProductOptions($product_id)
 * @method static ApiResponse getProductOptionValue($product_id, $product_option_value_id)
 * @method static ApiResponse getProductImages($product_id)
 * @method static ApiResponse getProductDiscounts($product_id)
 * @method static ApiResponse getProductSpecials($product_id)
 * @method static ApiResponse getProductRewards($product_id)
 * @method static ApiResponse getProductDownloads($product_id)
 * @method static ApiResponse getProductStores($product_id)
 * @method static ApiResponse getProductSeoUrls($product_id)
 * @method static ApiResponse getProductLayouts($product_id)
 * @method static ApiResponse getProductRelated($product_id)
 * @method static ApiResponse getRecurrings($product_id)
 * @method static ApiResponse getTotalProducts($data = array())
 * @method static ApiResponse getTotalProductsByTaxClassId($tax_class_id)
 * @method static ApiResponse getTotalProductsByStockStatusId($stock_status_id)
 * @method static ApiResponse getTotalProductsByWeightClassId($weight_class_id)
 * @method static ApiResponse getTotalProductsByLengthClassId($length_class_id)
 * @method static ApiResponse getTotalProductsByDownloadId($download_id)
 * @method static ApiResponse getTotalProductsByManufacturerId($manufacturer_id)
 * @method static ApiResponse getTotalProductsByAttributeId($attribute_id)
 * @method static ApiResponse getTotalProductsByOptionId($option_id)
 * @method static ApiResponse getTotalProductsByProfileId($recurring_id)
 * @method static ApiResponse getTotalProductsByLayoutId($layout_id)
 */
class AdminModelCatalogProduct extends BaseModel 
{
    const MODEL_NAME = 'catalog/product';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addReview($data)
 * @method static ApiResponse editReview($review_id, $data)
 * @method static ApiResponse deleteReview($review_id)
 * @method static ApiResponse getReview($review_id)
 * @method static ApiResponse getReviews($data = array())
 * @method static ApiResponse getTotalReviews($data = array())
 * @method static ApiResponse getTotalReviewsAwaitingApproval()
 */
class AdminModelCatalogReview extends BaseModel 
{
    const MODEL_NAME = 'catalog/review';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addAttributeGroup($data)
 * @method static ApiResponse editAttributeGroup($attribute_group_id, $data)
 * @method static ApiResponse deleteAttributeGroup($attribute_group_id)
 * @method static ApiResponse getAttributeGroup($attribute_group_id)
 * @method static ApiResponse getAttributeGroups($data = array())
 * @method static ApiResponse getAttributeGroupDescriptions($attribute_group_id)
 * @method static ApiResponse getTotalAttributeGroups()
 */
class AdminModelCatalogAttributeGroup extends BaseModel 
{
    const MODEL_NAME = 'catalog/attribute_group';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addAttribute($data)
 * @method static ApiResponse editAttribute($attribute_id, $data)
 * @method static ApiResponse deleteAttribute($attribute_id)
 * @method static ApiResponse getAttribute($attribute_id)
 * @method static ApiResponse getAttributes($data = array())
 * @method static ApiResponse getAttributeDescriptions($attribute_id)
 * @method static ApiResponse getTotalAttributes()
 * @method static ApiResponse getTotalAttributesByAttributeGroupId($attribute_group_id)
 */
class AdminModelCatalogAttribute extends BaseModel 
{
    const MODEL_NAME = 'catalog/attribute';
    const IS_ADMIN = true;
}




/**
 * @method static ApiResponse addRecurring($data)
 * @method static ApiResponse editRecurring($recurring_id, $data)
 * @method static ApiResponse copyRecurring($recurring_id)
 * @method static ApiResponse deleteRecurring($recurring_id)
 * @method static ApiResponse getRecurring($recurring_id)
 * @method static ApiResponse getRecurringDescription($recurring_id)
 * @method static ApiResponse getRecurrings($data = array())
 * @method static ApiResponse getTotalRecurrings()
 */
class AdminModelCatalogRecurring extends BaseModel 
{
    const MODEL_NAME = 'catalog/recurring';
    const IS_ADMIN = true;
}

