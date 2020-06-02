<?php

namespace Fatpanda\BexioConnector\Request\Sales\Invoices;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2RevertIssueInvoice
 */
class RevertIssueInvoiceRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}/revert_issue';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
