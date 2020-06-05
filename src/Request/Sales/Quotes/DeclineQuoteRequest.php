<?php

namespace Fatpanda\BexioConnector\Request\Sales\Quotes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeclineQuote
 */
class DeclineQuoteRequest extends Request
{
    const API_PATH = '/kb_offer/{quote_id}/reject';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
