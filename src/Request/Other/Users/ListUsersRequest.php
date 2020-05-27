<?php

namespace Fatpanda\BexioConnector\Request\Other\Users;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v3ShowUser
 */
class ListUsersRequest extends Request
{
    const API_VERSION_URL = '/3.0';
    const API_PATH = '/users';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\User>';
}
