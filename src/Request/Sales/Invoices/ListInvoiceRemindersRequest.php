<?php

namespace Fatpanda\BexioConnector\Request\Sales\Invoices;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListInvoiceReminders
 */
class ListInvoiceRemindersRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}/kb_reminder';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Sales\InvoiceReminder>';
}
