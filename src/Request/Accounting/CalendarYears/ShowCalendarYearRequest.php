<?php

namespace Fatpanda\BexioConnector\Request\Accounting\CalendarYears;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowCalendarYear
 */
class ShowCalendarYearRequest extends Request
{
    const API_PATH = '/accounting/calendar_years/{calendar_year_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Accounting\CalendarYear';
}
