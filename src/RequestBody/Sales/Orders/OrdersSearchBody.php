<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Orders;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class OrdersSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = OrdersSearchBodyItem::class;
}
