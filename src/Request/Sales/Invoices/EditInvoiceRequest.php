<?php

namespace Fatpanda\BexioConnector\Request\Sales\Invoices;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditInvoice
 */
class EditInvoiceRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\Invoice';
}
