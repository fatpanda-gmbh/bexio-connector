<?php

namespace Fatpanda\BexioConnector\RequestQuery\Sales;

use Fatpanda\BexioConnector\RequestQuery\OrderLimitRequestQuery;

class QuotesRequestQuery extends OrderLimitRequestQuery
{
    public const ORDER_BY_ID = 'id';
    public const ORDER_BY_TOTAL = 'total';
    public const ORDER_BY_TOTAL_NET = 'total_net';
    public const ORDER_BY_TOTAL_GROSS = 'total_gross';
    public const ORDER_BY_UPDATED_AT = 'updated_at';
}
