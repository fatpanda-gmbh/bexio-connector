<?php

namespace Fatpanda\BexioConnector\Request\Sales\Invoices;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateInvoice
 */
class CreateInvoiceRequest extends Request
{
    const API_PATH = '/kb_invoice';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\Invoice';
}
