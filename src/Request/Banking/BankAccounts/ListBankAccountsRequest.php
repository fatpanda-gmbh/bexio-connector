<?php

namespace Fatpanda\BexioConnector\Request\Banking\BankAccounts;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListBankAccounts
 */
class ListBankAccountsRequest extends Request
{
    const API_PATH = '/banking/accounts';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Banking\BankAccount>';
}
