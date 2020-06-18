<?php

namespace Fatpanda\BexioConnector\Request\Other\Permissions;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/Permissions
 */
class ShowPermissionsRequest extends Request
{
    const API_VERSION_URL = '/3.0';
    const API_PATH = '/permissions';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Other\Permissions';
}
