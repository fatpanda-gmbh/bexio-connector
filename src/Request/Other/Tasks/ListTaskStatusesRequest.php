<?php

namespace Fatpanda\BexioConnector\Request\Other\Tasks;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListTaskStatus
 */
class ListTaskStatusesRequest extends Request
{
    const API_PATH = '/todo_status';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\TaskStatus>';
}
