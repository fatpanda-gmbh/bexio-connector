<?php

namespace Fatpanda\BexioConnector\Request\Items\Items;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListItems
 */
class ListItemsRequest extends Request
{
    const API_PATH = '/article';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Items\Item>';
}
