<?php

namespace Fatpanda\BexioConnector\Request\Other\Units;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowUnit
 */
class ShowUnitRequest extends Request
{
    const API_PATH = '/unit/{unit_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Other\Unit';
}
