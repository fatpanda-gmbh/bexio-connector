<?php

namespace Fatpanda\BexioConnector\Request\Banking\IBANPayments;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowIbanPayment
 */
class ShowIBANPaymentRequest extends Request
{
    const API_PATH = '/banking/bank_accounts/{bank_account_id}/iban_payments/{payment_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Banking\BankIBANPayment';
}
