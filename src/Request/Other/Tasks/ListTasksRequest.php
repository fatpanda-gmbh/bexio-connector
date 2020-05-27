<?php

namespace Fatpanda\BexioConnector\Request\Other\Tasks;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListTasks
 */
class ListTasksRequest extends Request
{
    const API_PATH = '/task';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\Task>';
}
