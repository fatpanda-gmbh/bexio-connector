<?php

namespace Fatpanda\BexioConnector\Request\Accounting\Accounts;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListAccounts
 */
class ListAccountsRequest extends Request
{
    const API_PATH = '/accounts';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Accounting\Account>';
}
