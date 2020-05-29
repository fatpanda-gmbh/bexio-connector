<?php

namespace Fatpanda\BexioConnector\Request\Banking\BankAccounts;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowBankAccount
 */
class ShowBankAccountRequest extends Request
{
    const API_PATH = '/banking/accounts/{bank_account_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Banking\BankAccount';
}
