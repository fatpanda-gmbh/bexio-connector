<?php

namespace Fatpanda\BexioConnector\Request\Items\Items;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateItem
 */
class CreateItemRequest extends Request
{
    const API_PATH = '/article';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Items\Item';
}
