<?php

namespace Fatpanda\BexioConnector\RequestQuery\Other;

use Fatpanda\BexioConnector\RequestQuery\OrderLimitRequestQuery;

class TasksRequestQuery extends OrderLimitRequestQuery
{
    public const ORDER_BY_ID = 'id';
    public const ORDER_BY_FINISH_DATE = 'finish_date';
}
