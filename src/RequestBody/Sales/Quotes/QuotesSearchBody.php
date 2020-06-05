<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Quotes;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class QuotesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = QuotesSearchBodyItem::class;
}
