<?php

namespace Fatpanda\BexioConnector\RequestQuery\Contacts;

use Fatpanda\BexioConnector\RequestQuery\OrderLimitRequestQuery;

class ContactsRequestQuery extends OrderLimitRequestQuery
{
    public const ORDER_BY_ID = 'id';
    public const ORDER_BY_NR = 'nr';
    public const ORDER_BY_NAME1 = 'name_1';
    public const ORDER_BY_UPDATED_AT = 'updated_at';
}
