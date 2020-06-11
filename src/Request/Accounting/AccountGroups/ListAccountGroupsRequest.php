<?php

namespace Fatpanda\BexioConnector\Request\Accounting\AccountGroups;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListAccountGroups
 */
class ListAccountGroupsRequest extends Request
{
    const API_PATH = '/account_groups';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Accounting\AccountGroup>';
}
