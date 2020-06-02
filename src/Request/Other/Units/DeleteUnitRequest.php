<?php

namespace Fatpanda\BexioConnector\Request\Other\Units;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteUnit
 */
class DeleteUnitRequest extends Request
{
    const API_PATH = '/unit/{unit_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
