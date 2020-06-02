<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Countries;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class CountriesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = CountriesSearchBodyItem::class;
}
