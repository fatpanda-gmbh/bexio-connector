<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Languages;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBodyItem;

class LanguagesSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_NAME = 'name';
    public const SEARCH_FIELD_ISO_639_1 = 'iso_639_1';
}
