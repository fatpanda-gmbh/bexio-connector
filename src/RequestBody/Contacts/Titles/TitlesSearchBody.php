<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\Titles;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class TitlesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = TitlesSearchBodyItem::class;
}
