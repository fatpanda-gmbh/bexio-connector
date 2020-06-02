<?php

namespace Fatpanda\BexioConnector\Request\Sales\Invoices;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListInvoicePayments
 */
class ListInvoicePaymentsRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}/payment';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Sales\InvoicePayment>';
}
