<?php

namespace Fatpanda\BexioConnector\RequestBody\Projects\Timesheets;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class TimesheetsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = TimesheetsSearchBodyItem::class;
}
