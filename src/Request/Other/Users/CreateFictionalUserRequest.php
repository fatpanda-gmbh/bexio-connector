<?php

namespace Fatpanda\BexioConnector\Request\Other\Users;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v3CreateFictionalUser
 */
class CreateFictionalUserRequest extends Request
{
    const API_VERSION_URL = '/3.0';
    const API_PATH = '/fictional_users';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Other\FictionalUser';
}
