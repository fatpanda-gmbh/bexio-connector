<?php

namespace Fatpanda\BexioConnector\Request\Other\Tasks;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListTaskPriorities
 */
class ListTaskPrioritiesRequest extends Request
{
    const API_PATH = '/todo_priority';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\TaskPriority>';
}
