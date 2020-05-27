<?php

namespace Fatpanda\BexioConnector\RequestQuery\Contacts;

use Fatpanda\BexioConnector\RequestQuery\OrderLimitRequestQuery;

class ContactRelationsRequestQuery extends OrderLimitRequestQuery
{
    public const ORDER_BY_ID = 'id';
    public const ORDER_BY_CONTACT_ID = 'contact_id';
    public const ORDER_BY_CONTACT_SUB_ID = 'contact_sub_id';
    public const ORDER_BY_UPDATED_AT = 'updated_at';
}
