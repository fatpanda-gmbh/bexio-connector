<?php

namespace Fatpanda\BexioConnector\Request\Other\Tasks;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchTasks
 */
class SearchTasksRequest extends Request
{
    const API_PATH = '/task/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\Task>';
}
