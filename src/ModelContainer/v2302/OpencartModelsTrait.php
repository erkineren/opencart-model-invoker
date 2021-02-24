<?php


namespace OpencartApi\ModelContainer\v2302;


use OpencartApi\Base\BaseModel;

/**
 * Trait OpencartModelsTrait
 *
 * @method \OpencartApi\Models\v2302\ModelCheckoutOrder getModelCheckoutOrder
 * @method \OpencartApi\Models\v2302\ModelCheckoutRecurring getModelCheckoutRecurring
 * @method \OpencartApi\Models\v2302\ModelCheckoutMarketing getModelCheckoutMarketing
 * @method \OpencartApi\Models\v2302\ModelToolImage getModelToolImage
 * @method \OpencartApi\Models\v2302\ModelToolOnline getModelToolOnline
 * @method \OpencartApi\Models\v2302\ModelToolUpload getModelToolUpload
 * @method \OpencartApi\Models\v2302\ModelSettingApi getModelSettingApi
 * @method \OpencartApi\Models\v2302\ModelSettingSetting getModelSettingSetting
 * @method \OpencartApi\Models\v2302\ModelSettingStore getModelSettingStore
 * @method \OpencartApi\Models\v2302\ModelAffiliateTransaction getModelAffiliateTransaction
 * @method \OpencartApi\Models\v2302\ModelAffiliateActivity getModelAffiliateActivity
 * @method \OpencartApi\Models\v2302\ModelAffiliateAffiliate getModelAffiliateAffiliate
 * @method \OpencartApi\Models\v2302\ModelAccountOrder getModelAccountOrder
 * @method \OpencartApi\Models\v2302\ModelAccountApi getModelAccountApi
 * @method \OpencartApi\Models\v2302\ModelAccountAddress getModelAccountAddress
 * @method \OpencartApi\Models\v2302\ModelAccountReward getModelAccountReward
 * @method \OpencartApi\Models\v2302\ModelAccountCustomer getModelAccountCustomer
 * @method \OpencartApi\Models\v2302\ModelAccountTransaction getModelAccountTransaction
 * @method \OpencartApi\Models\v2302\ModelAccountActivity getModelAccountActivity
 * @method \OpencartApi\Models\v2302\ModelAccountCustomerGroup getModelAccountCustomerGroup
 * @method \OpencartApi\Models\v2302\ModelAccountWishlist getModelAccountWishlist
 * @method \OpencartApi\Models\v2302\ModelAccountRecurring getModelAccountRecurring
 * @method \OpencartApi\Models\v2302\ModelAccountCustomField getModelAccountCustomField
 * @method \OpencartApi\Models\v2302\ModelAccountDownload getModelAccountDownload
 * @method \OpencartApi\Models\v2302\ModelAccountReturn getModelAccountReturn
 * @method \OpencartApi\Models\v2302\ModelAccountSearch getModelAccountSearch
 * @method \OpencartApi\Models\v2302\ModelCatalogCategory getModelCatalogCategory
 * @method \OpencartApi\Models\v2302\ModelCatalogManufacturer getModelCatalogManufacturer
 * @method \OpencartApi\Models\v2302\ModelCatalogProduct getModelCatalogProduct
 * @method \OpencartApi\Models\v2302\ModelCatalogReview getModelCatalogReview
 * @method \OpencartApi\Models\v2302\ModelCatalogInformation getModelCatalogInformation
 * @method \OpencartApi\Models\v2302\ModelExtensionFeedGoogleBase getModelExtensionFeedGoogleBase
 * @method \OpencartApi\Models\v2302\ModelExtensionModule getModelExtensionModule
 * @method \OpencartApi\Models\v2302\ModelExtensionModuleLaybuyLayout getModelExtensionModuleLaybuyLayout
 * @method \OpencartApi\Models\v2302\ModelExtensionModulePpLogin getModelExtensionModulePpLogin
 * @method \OpencartApi\Models\v2302\ModelExtensionOpenbayAmazonusOrder getModelExtensionOpenbayAmazonusOrder
 * @method \OpencartApi\Models\v2302\ModelExtensionOpenbayEtsyOrder getModelExtensionOpenbayEtsyOrder
 * @method \OpencartApi\Models\v2302\ModelExtensionOpenbayAmazonusListing getModelExtensionOpenbayAmazonusListing
 * @method \OpencartApi\Models\v2302\ModelExtensionOpenbayAmazonusProduct getModelExtensionOpenbayAmazonusProduct
 * @method \OpencartApi\Models\v2302\ModelExtensionOpenbayEtsyProduct getModelExtensionOpenbayEtsyProduct
 * @method \OpencartApi\Models\v2302\ModelExtensionOpenbayAmazonListing getModelExtensionOpenbayAmazonListing
 * @method \OpencartApi\Models\v2302\ModelExtensionOpenbayAmazonProduct getModelExtensionOpenbayAmazonProduct
 * @method \OpencartApi\Models\v2302\ModelExtensionOpenbayEbayOrder getModelExtensionOpenbayEbayOrder
 * @method \OpencartApi\Models\v2302\ModelExtensionOpenbayEbayProduct getModelExtensionOpenbayEbayProduct
 * @method \OpencartApi\Models\v2302\ModelExtensionOpenbayEbayOpenbay getModelExtensionOpenbayEbayOpenbay
 * @method \OpencartApi\Models\v2302\ModelExtensionOpenbayAmazonOrder getModelExtensionOpenbayAmazonOrder
 * @method \OpencartApi\Models\v2302\ModelExtensionExtension getModelExtensionExtension
 * @method \OpencartApi\Models\v2302\ModelExtensionEvent getModelExtensionEvent
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalKlarnaFee getModelExtensionTotalKlarnaFee
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalReward getModelExtensionTotalReward
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalCoupon getModelExtensionTotalCoupon
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalLowOrderFee getModelExtensionTotalLowOrderFee
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalCredit getModelExtensionTotalCredit
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalTax getModelExtensionTotalTax
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalVoucherTheme getModelExtensionTotalVoucherTheme
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalTotal getModelExtensionTotalTotal
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalShipping getModelExtensionTotalShipping
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalSubTotal getModelExtensionTotalSubTotal
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalHandling getModelExtensionTotalHandling
 * @method \OpencartApi\Models\v2302\ModelExtensionTotalVoucher getModelExtensionTotalVoucher
 * @method \OpencartApi\Models\v2302\ModelExtensionFraudMaxmind getModelExtensionFraudMaxmind
 * @method \OpencartApi\Models\v2302\ModelExtensionFraudIp getModelExtensionFraudIp
 * @method \OpencartApi\Models\v2302\ModelExtensionFraudFraudlabspro getModelExtensionFraudFraudlabspro
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentKlarnaCheckout getModelExtensionPaymentKlarnaCheckout
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentPerpetualPayments getModelExtensionPaymentPerpetualPayments
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentFirstdata getModelExtensionPaymentFirstdata
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentNochex getModelExtensionPaymentNochex
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentLaybuy getModelExtensionPaymentLaybuy
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentLiqpay getModelExtensionPaymentLiqpay
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentSagepayDirect getModelExtensionPaymentSagepayDirect
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentCheque getModelExtensionPaymentCheque
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentDivido getModelExtensionPaymentDivido
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentFirstdataRemote getModelExtensionPaymentFirstdataRemote
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentBluepayHosted getModelExtensionPaymentBluepayHosted
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentWebPaymentSoftware getModelExtensionPaymentWebPaymentSoftware
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentSkrill getModelExtensionPaymentSkrill
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentTwocheckout getModelExtensionPaymentTwocheckout
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentCardconnect getModelExtensionPaymentCardconnect
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentPpStandard getModelExtensionPaymentPpStandard
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentFreeCheckout getModelExtensionPaymentFreeCheckout
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentPaymate getModelExtensionPaymentPaymate
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentPpExpress getModelExtensionPaymentPpExpress
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentPpPayflowIframe getModelExtensionPaymentPpPayflowIframe
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentBluepayRedirect getModelExtensionPaymentBluepayRedirect
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentWorldpay getModelExtensionPaymentWorldpay
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentRealexRemote getModelExtensionPaymentRealexRemote
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentCod getModelExtensionPaymentCod
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentEway getModelExtensionPaymentEway
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentCardinity getModelExtensionPaymentCardinity
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentSagepayUs getModelExtensionPaymentSagepayUs
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentAuthorizenetSim getModelExtensionPaymentAuthorizenetSim
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentPpPro getModelExtensionPaymentPpPro
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentPayza getModelExtensionPaymentPayza
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentG2apay getModelExtensionPaymentG2apay
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentPaypoint getModelExtensionPaymentPaypoint
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentAmazonLoginPay getModelExtensionPaymentAmazonLoginPay
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentGlobalpayRemote getModelExtensionPaymentGlobalpayRemote
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentGlobalpay getModelExtensionPaymentGlobalpay
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentKlarnaAccount getModelExtensionPaymentKlarnaAccount
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentPilibaba getModelExtensionPaymentPilibaba
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentSecuretradingPp getModelExtensionPaymentSecuretradingPp
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentBankTransfer getModelExtensionPaymentBankTransfer
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentPpProIframe getModelExtensionPaymentPpProIframe
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentKlarnaInvoice getModelExtensionPaymentKlarnaInvoice
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentSagepayServer getModelExtensionPaymentSagepayServer
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentAuthorizenetAim getModelExtensionPaymentAuthorizenetAim
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentSecuretradingWs getModelExtensionPaymentSecuretradingWs
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentPpPayflow getModelExtensionPaymentPpPayflow
 * @method \OpencartApi\Models\v2302\ModelExtensionPaymentRealex getModelExtensionPaymentRealex
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingFedex getModelExtensionShippingFedex
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingUsps getModelExtensionShippingUsps
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingUps getModelExtensionShippingUps
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingFree getModelExtensionShippingFree
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingCitylink getModelExtensionShippingCitylink
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingRoyalMail getModelExtensionShippingRoyalMail
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingFlat getModelExtensionShippingFlat
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingItem getModelExtensionShippingItem
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingAuspost getModelExtensionShippingAuspost
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingPilibaba getModelExtensionShippingPilibaba
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingPickup getModelExtensionShippingPickup
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingWeight getModelExtensionShippingWeight
 * @method \OpencartApi\Models\v2302\ModelExtensionShippingParcelforce48 getModelExtensionShippingParcelforce48
 * @method \OpencartApi\Models\v2302\ModelLocalisationZone getModelLocalisationZone
 * @method \OpencartApi\Models\v2302\ModelLocalisationLanguage getModelLocalisationLanguage
 * @method \OpencartApi\Models\v2302\ModelLocalisationReturnReason getModelLocalisationReturnReason
 * @method \OpencartApi\Models\v2302\ModelLocalisationCurrency getModelLocalisationCurrency
 * @method \OpencartApi\Models\v2302\ModelLocalisationCountry getModelLocalisationCountry
 * @method \OpencartApi\Models\v2302\ModelLocalisationLocation getModelLocalisationLocation
 * @method \OpencartApi\Models\v2302\ModelDesignBanner getModelDesignBanner
 * @method \OpencartApi\Models\v2302\ModelDesignLayout getModelDesignLayout
 * @method \OpencartApi\Models\v2302\ModelDesignTranslation getModelDesignTranslation
 * @method \OpencartApi\Models\v2302\ModelDesignTheme getModelDesignTheme
 * @method \OpencartApi\Models\v2302\AdminModelSaleOrder getAdminModelSaleOrder
 * @method \OpencartApi\Models\v2302\AdminModelSaleRecurring getAdminModelSaleRecurring
 * @method \OpencartApi\Models\v2302\AdminModelSaleVoucherTheme getAdminModelSaleVoucherTheme
 * @method \OpencartApi\Models\v2302\AdminModelSaleReturn getAdminModelSaleReturn
 * @method \OpencartApi\Models\v2302\AdminModelSaleVoucher getAdminModelSaleVoucher
 * @method \OpencartApi\Models\v2302\AdminModelToolImage getAdminModelToolImage
 * @method \OpencartApi\Models\v2302\AdminModelToolUpload getAdminModelToolUpload
 * @method \OpencartApi\Models\v2302\AdminModelToolBackup getAdminModelToolBackup
 * @method \OpencartApi\Models\v2302\AdminModelSettingSetting getAdminModelSettingSetting
 * @method \OpencartApi\Models\v2302\AdminModelSettingStore getAdminModelSettingStore
 * @method \OpencartApi\Models\v2302\AdminModelCatalogCategory getAdminModelCatalogCategory
 * @method \OpencartApi\Models\v2302\AdminModelCatalogAttributeGroup getAdminModelCatalogAttributeGroup
 * @method \OpencartApi\Models\v2302\AdminModelCatalogManufacturer getAdminModelCatalogManufacturer
 * @method \OpencartApi\Models\v2302\AdminModelCatalogOption getAdminModelCatalogOption
 * @method \OpencartApi\Models\v2302\AdminModelCatalogProduct getAdminModelCatalogProduct
 * @method \OpencartApi\Models\v2302\AdminModelCatalogUrlAlias getAdminModelCatalogUrlAlias
 * @method \OpencartApi\Models\v2302\AdminModelCatalogRecurring getAdminModelCatalogRecurring
 * @method \OpencartApi\Models\v2302\AdminModelCatalogDownload getAdminModelCatalogDownload
 * @method \OpencartApi\Models\v2302\AdminModelCatalogAttribute getAdminModelCatalogAttribute
 * @method \OpencartApi\Models\v2302\AdminModelCatalogReview getAdminModelCatalogReview
 * @method \OpencartApi\Models\v2302\AdminModelCatalogFilter getAdminModelCatalogFilter
 * @method \OpencartApi\Models\v2302\AdminModelCatalogInformation getAdminModelCatalogInformation
 * @method \OpencartApi\Models\v2302\AdminModelMarketingCoupon getAdminModelMarketingCoupon
 * @method \OpencartApi\Models\v2302\AdminModelMarketingAffiliate getAdminModelMarketingAffiliate
 * @method \OpencartApi\Models\v2302\AdminModelMarketingMarketing getAdminModelMarketingMarketing
 * @method \OpencartApi\Models\v2302\AdminModelExtensionFeedGoogleBase getAdminModelExtensionFeedGoogleBase
 * @method \OpencartApi\Models\v2302\AdminModelExtensionModule getAdminModelExtensionModule
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayOrder getAdminModelExtensionOpenbayOrder
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayAmazonusListing getAdminModelExtensionOpenbayAmazonusListing
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayEtsyProduct getAdminModelExtensionOpenbayEtsyProduct
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayAmazonListing getAdminModelExtensionOpenbayAmazonListing
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayFba getAdminModelExtensionOpenbayFba
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayEtsy getAdminModelExtensionOpenbayEtsy
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayEbay getAdminModelExtensionOpenbayEbay
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayEbayProduct getAdminModelExtensionOpenbayEbayProduct
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayAmazon getAdminModelExtensionOpenbayAmazon
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayOpenbay getAdminModelExtensionOpenbayOpenbay
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayAmazonus getAdminModelExtensionOpenbayAmazonus
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayEbayProfile getAdminModelExtensionOpenbayEbayProfile
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayEbayTemplate getAdminModelExtensionOpenbayEbayTemplate
 * @method \OpencartApi\Models\v2302\AdminModelExtensionOpenbayVersion getAdminModelExtensionOpenbayVersion
 * @method \OpencartApi\Models\v2302\AdminModelExtensionExtension getAdminModelExtensionExtension
 * @method \OpencartApi\Models\v2302\AdminModelExtensionEvent getAdminModelExtensionEvent
 * @method \OpencartApi\Models\v2302\AdminModelExtensionFraudMaxmind getAdminModelExtensionFraudMaxmind
 * @method \OpencartApi\Models\v2302\AdminModelExtensionFraudIp getAdminModelExtensionFraudIp
 * @method \OpencartApi\Models\v2302\AdminModelExtensionFraudFraudlabspro getAdminModelExtensionFraudFraudlabspro
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentKlarnaCheckout getAdminModelExtensionPaymentKlarnaCheckout
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentFirstdata getAdminModelExtensionPaymentFirstdata
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentLaybuy getAdminModelExtensionPaymentLaybuy
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentSagepayDirect getAdminModelExtensionPaymentSagepayDirect
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentDivido getAdminModelExtensionPaymentDivido
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentFirstdataRemote getAdminModelExtensionPaymentFirstdataRemote
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentBluepayHosted getAdminModelExtensionPaymentBluepayHosted
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentCardconnect getAdminModelExtensionPaymentCardconnect
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentPpExpress getAdminModelExtensionPaymentPpExpress
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentPpPayflowIframe getAdminModelExtensionPaymentPpPayflowIframe
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentBluepayRedirect getAdminModelExtensionPaymentBluepayRedirect
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentWorldpay getAdminModelExtensionPaymentWorldpay
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentRealexRemote getAdminModelExtensionPaymentRealexRemote
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentEway getAdminModelExtensionPaymentEway
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentCardinity getAdminModelExtensionPaymentCardinity
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentG2apay getAdminModelExtensionPaymentG2apay
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentAmazonLoginPay getAdminModelExtensionPaymentAmazonLoginPay
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentGlobalpayRemote getAdminModelExtensionPaymentGlobalpayRemote
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentGlobalpay getAdminModelExtensionPaymentGlobalpay
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentPilibaba getAdminModelExtensionPaymentPilibaba
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentSecuretradingPp getAdminModelExtensionPaymentSecuretradingPp
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentPpProIframe getAdminModelExtensionPaymentPpProIframe
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentSagepayServer getAdminModelExtensionPaymentSagepayServer
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentSecuretradingWs getAdminModelExtensionPaymentSecuretradingWs
 * @method \OpencartApi\Models\v2302\AdminModelExtensionPaymentRealex getAdminModelExtensionPaymentRealex
 * @method \OpencartApi\Models\v2302\AdminModelExtensionModification getAdminModelExtensionModification
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationZone getAdminModelLocalisationZone
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationLanguage getAdminModelLocalisationLanguage
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationStockStatus getAdminModelLocalisationStockStatus
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationLengthClass getAdminModelLocalisationLengthClass
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationReturnStatus getAdminModelLocalisationReturnStatus
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationTaxClass getAdminModelLocalisationTaxClass
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationReturnReason getAdminModelLocalisationReturnReason
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationWeightClass getAdminModelLocalisationWeightClass
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationGeoZone getAdminModelLocalisationGeoZone
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationCurrency getAdminModelLocalisationCurrency
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationCountry getAdminModelLocalisationCountry
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationTaxRate getAdminModelLocalisationTaxRate
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationOrderStatus getAdminModelLocalisationOrderStatus
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationLocation getAdminModelLocalisationLocation
 * @method \OpencartApi\Models\v2302\AdminModelLocalisationReturnAction getAdminModelLocalisationReturnAction
 * @method \OpencartApi\Models\v2302\AdminModelUserApi getAdminModelUserApi
 * @method \OpencartApi\Models\v2302\AdminModelUserUser getAdminModelUserUser
 * @method \OpencartApi\Models\v2302\AdminModelUserUserGroup getAdminModelUserUserGroup
 * @method \OpencartApi\Models\v2302\AdminModelDesignLanguage getAdminModelDesignLanguage
 * @method \OpencartApi\Models\v2302\AdminModelDesignBanner getAdminModelDesignBanner
 * @method \OpencartApi\Models\v2302\AdminModelDesignLayout getAdminModelDesignLayout
 * @method \OpencartApi\Models\v2302\AdminModelDesignMenu getAdminModelDesignMenu
 * @method \OpencartApi\Models\v2302\AdminModelDesignTheme getAdminModelDesignTheme
 * @method \OpencartApi\Models\v2302\AdminModelReportSale getAdminModelReportSale
 * @method \OpencartApi\Models\v2302\AdminModelReportCustomer getAdminModelReportCustomer
 * @method \OpencartApi\Models\v2302\AdminModelReportActivity getAdminModelReportActivity
 * @method \OpencartApi\Models\v2302\AdminModelReportCoupon getAdminModelReportCoupon
 * @method \OpencartApi\Models\v2302\AdminModelReportProduct getAdminModelReportProduct
 * @method \OpencartApi\Models\v2302\AdminModelReportAffiliate getAdminModelReportAffiliate
 * @method \OpencartApi\Models\v2302\AdminModelReportReturn getAdminModelReportReturn
 * @method \OpencartApi\Models\v2302\AdminModelReportMarketing getAdminModelReportMarketing
 * @method \OpencartApi\Models\v2302\AdminModelCustomerCustomer getAdminModelCustomerCustomer
 * @method \OpencartApi\Models\v2302\AdminModelCustomerCustomerGroup getAdminModelCustomerCustomerGroup
 * @method \OpencartApi\Models\v2302\AdminModelCustomerCustomField getAdminModelCustomerCustomField
 */
trait OpencartModelsTrait
{
    
}