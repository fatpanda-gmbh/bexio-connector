<?php

namespace Fatpanda\BexioConnector\Request\Sales\Quotes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CopyQuote
 */
class CopyQuoteRequest extends Request
{
    const API_PATH = '/kb_offer/{quote_id}/copy';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\Quote';
}
