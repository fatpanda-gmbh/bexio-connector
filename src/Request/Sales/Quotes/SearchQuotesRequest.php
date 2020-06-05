<?php

namespace Fatpanda\BexioConnector\Request\Sales\Quotes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchQuotes
 */
class SearchQuotesRequest extends Request
{
    const API_PATH = '/kb_offer/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Sales\Quote>';
}
