<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Orders;

use Fatpanda\BexioConnector\RequestBody\AbstractArrayBody;

class PositionsArrayBody extends AbstractArrayBody
{
    protected const ITEM_CLASS = PositionsArrayBodyItem::class;

    public function createItem(): PositionsArrayBodyItem
    {
        return parent::createItem();
    }
}
