<?php

namespace Fatpanda\BexioConnector\Request\Items\Items;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowItem
 */
class ShowItemRequest extends Request
{
    const API_PATH = '/article/{article_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Items\Item';
}
