<?php

namespace Fatpanda\BexioConnector\Request\Other\Units;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListUnits
 */
class ListUnitsRequest extends Request
{
    const API_PATH = '/unit';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\Unit>';
}
