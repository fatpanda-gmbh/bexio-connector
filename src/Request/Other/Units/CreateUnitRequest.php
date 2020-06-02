<?php

namespace Fatpanda\BexioConnector\Request\Other\Units;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateUnit
 */
class CreateUnitRequest extends Request
{
    const API_PATH = '/unit';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Other\Unit';
}
