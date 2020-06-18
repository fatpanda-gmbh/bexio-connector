<?php

namespace Fatpanda\BexioConnector\RequestBody\Items\Items;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class ItemsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = ItemsSearchBodyItem::class;
}
