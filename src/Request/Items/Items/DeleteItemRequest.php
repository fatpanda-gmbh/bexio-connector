<?php

namespace Fatpanda\BexioConnector\Request\Items\Items;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteItem
 */
class DeleteItemRequest extends Request
{
    const API_PATH = '/article/{article_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
