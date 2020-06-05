<?php

namespace Fatpanda\BexioConnector\Request\Banking\ISRPayments;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/CreateISRPayment
 */
class CreateISRPaymentRequest extends Request
{
    const API_PATH = '/banking/bank_accounts/{bank_account_id}/isr_payments';
    const API_METHOD = 'POST';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Banking\BankISRPayment';
}
