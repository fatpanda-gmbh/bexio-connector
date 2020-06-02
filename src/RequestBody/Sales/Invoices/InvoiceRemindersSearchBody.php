<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Invoices;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class InvoiceRemindersSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = InvoiceRemindersSearchBodyItem::class;
}
