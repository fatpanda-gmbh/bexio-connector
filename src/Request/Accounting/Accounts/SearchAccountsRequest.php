<?php

namespace Fatpanda\BexioConnector\Request\Accounting\Accounts;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchAccounts
 */
class SearchAccountsRequest extends Request
{
    const API_PATH = '/accounts/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Accounting\Account>';
}
