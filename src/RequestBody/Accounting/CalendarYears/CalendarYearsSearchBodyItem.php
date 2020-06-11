<?php

namespace Fatpanda\BexioConnector\RequestBody\Accounting\CalendarYears;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBodyItem;

class CalendarYearsSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_ID = 'id';
    public const SEARCH_FIELD_START = 'start';
    public const SEARCH_FIELD_END = 'end';
    public const SEARCH_FIELD_IS_VAT_SUBJECT = 'is_vat_subject';
    public const SEARCH_FIELD_CREATED_AT = 'created_at';
    public const SEARCH_FIELD_UPDATED_AT = 'updated_at';
    public const SEARCH_FIELD_VAT_ACCOUNTING_METHOD = 'vat_accounting_method';
    public const SEARCH_FIELD_VAT_ACCOUNTING_TYPE = 'vat_accounting_type';
}
