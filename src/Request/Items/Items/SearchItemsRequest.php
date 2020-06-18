<?php

namespace Fatpanda\BexioConnector\Request\Items\Items;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchItems
 */
class SearchItemsRequest extends Request
{
    const API_PATH = '/article/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Items\Item>';
}
