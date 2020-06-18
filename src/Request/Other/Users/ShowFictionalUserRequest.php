<?php

namespace Fatpanda\BexioConnector\Request\Other\Users;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v3ShowFictionalUser
 */
class ShowFictionalUserRequest extends Request
{
    const API_VERSION_URL = '/3.0';
    const API_PATH = '/fictional_users/{fictional_user_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Other\FictionalUser';
}
