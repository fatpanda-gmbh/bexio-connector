<?php

namespace Fatpanda\BexioConnector\Request\Sales\Quotes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowQuotePDF
 */
class ShowQuotePDFRequest extends Request
{
    const API_PATH = '/kb_offer/{quote_id}/pdf';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\File';
}
