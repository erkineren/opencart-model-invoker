<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addCustomer($data)
 * @method ApiResponse getCustomer($customer_id, $sandbox)
 * @method ApiResponse addCard($customer_id, $sandbox, $data)
 * @method ApiResponse getCard($squareup_token_id)
 * @method ApiResponse getCards($customer_id, $sandbox)
 * @method ApiResponse cardExists($customer_id, $data)
 * @method ApiResponse verifyCardCustomer($squareup_token_id, $customer_id)
 * @method ApiResponse deleteCard($squareup_token_id)
 */
class ModelExtensionCreditCardSquareup extends BaseModel
{
    const MODEL_NAME = 'extension/credit_card/squareup';
    
}

