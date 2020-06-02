<?php

namespace Fatpanda\BexioConnector\Request\Sales\Invoices;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SendInvoiceReminder
 */
class SendInvoiceReminderRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}/kb_reminder/{reminder_id}/send';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
