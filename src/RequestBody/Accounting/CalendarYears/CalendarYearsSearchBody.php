<?php

namespace Fatpanda\BexioConnector\RequestBody\Accounting\CalendarYears;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class CalendarYearsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = CalendarYearsSearchBodyItem::class;
}
