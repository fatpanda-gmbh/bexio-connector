<?php

namespace Fatpanda\BexioConnector\Request\Banking\BankPayments;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeletePayment
 */
class DeleteBankPaymentRequest extends Request
{
    const API_PATH = '/banking/payments/{payment_id}';
    const API_METHOD = 'DELETE';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
