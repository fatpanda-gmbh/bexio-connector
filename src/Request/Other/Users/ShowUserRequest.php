<?php

namespace Fatpanda\BexioConnector\Request\Other\Users;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v3ShowUser
 */
class ShowUserRequest extends Request
{
    const API_PATH = '/users/{user_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Other\User';
}
