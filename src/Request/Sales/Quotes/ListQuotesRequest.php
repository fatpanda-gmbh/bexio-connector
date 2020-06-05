<?php

namespace Fatpanda\BexioConnector\Request\Sales\Quotes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListQuotes
 */
class ListQuotesRequest extends Request
{
    const API_PATH = '/kb_order';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Sales\Quote>';
}
