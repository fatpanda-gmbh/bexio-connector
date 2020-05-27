<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Invoices;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class InvoicesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = InvoicesSearchBodyItem::class;
}
