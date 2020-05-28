<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Countries;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBodyItem;

class CountriesSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_NAME = 'name';
    public const SEARCH_FIELD_NAME_SHORT = 'name_short';
}
