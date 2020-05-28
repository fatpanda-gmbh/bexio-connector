<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Tasks;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class TasksSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = TasksSearchBodyItem::class;
}
