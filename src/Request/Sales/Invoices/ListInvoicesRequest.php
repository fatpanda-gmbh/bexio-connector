<?php

namespace Fatpanda\BexioConnector\Request\Sales\Invoices;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListInvoices
 */
class ListInvoicesRequest extends Request
{
    const API_PATH = '/kb_invoice';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Sales\Invoice>';
}
