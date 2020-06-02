<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Invoices;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBodyItem;

class InvoiceRemindersSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_TITLE = 'title';
    public const SEARCH_FIELD_REMINDER_LEVEL = 'reminder_level';
    public const SEARCH_FIELD_IS_SENT = 'is_sent';
    public const SEARCH_FIELD_IS_VALID_FROM = 'is_valid_from';
    public const SEARCH_FIELD_IS_VALID_TO = 'is_valid_to';
}
