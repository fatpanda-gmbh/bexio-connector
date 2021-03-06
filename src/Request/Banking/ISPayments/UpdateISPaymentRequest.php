<?php

namespace Fatpanda\BexioConnector\Request\Banking\ISPayments;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/UpdateISPayment
 */
class UpdateISPaymentRequest extends Request
{
    const API_PATH = '/banking/bank_accounts/{bank_account_id}/is_payments/{payment_id}';
    const API_METHOD = 'PATCH';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Banking\BankISPayment';
}
