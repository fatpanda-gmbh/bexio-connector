<?php

namespace Fatpanda\BexioConnector\Request\Sales\Invoices;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowInvoiceReminder
 */
class ShowInvoiceReminderRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}/kb_reminder/{reminder_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\InvoiceReminder';
}
