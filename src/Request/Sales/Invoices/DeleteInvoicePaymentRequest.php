<?php

namespace Fatpanda\BexioConnector\Request\Sales\Invoices;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteInvoicePayment
 */
class DeleteInvoicePaymentRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}/payment/{payment_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
