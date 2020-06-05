<?php

namespace Fatpanda\BexioConnector\Request\Sales\Quotes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowQuote
 */
class ShowQuoteRequest extends Request
{
    const API_PATH = '/kb_offer/{quote_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\Quote';
}
