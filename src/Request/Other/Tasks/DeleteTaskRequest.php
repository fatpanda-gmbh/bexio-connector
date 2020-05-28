<?php

namespace Fatpanda\BexioConnector\Request\Other\Tasks;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteTask
 */
class DeleteTaskRequest extends Request
{
    const API_PATH = '/task/{task_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
