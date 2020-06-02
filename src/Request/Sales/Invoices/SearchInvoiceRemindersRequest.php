<?php

namespace Fatpanda\BexioConnector\Request\Sales\Invoices;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchInvoiceReminders
 */
class SearchInvoiceRemindersRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}/kb_reminder/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Sales\InvoiceReminder>';
}
