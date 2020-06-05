<?php

namespace Fatpanda\BexioConnector\Request\Banking\BankPayments;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListPayments
 */
class ListBankPaymentsRequest extends Request
{
    const API_PATH = '/banking/payments';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Banking\BankPayment>';
}
