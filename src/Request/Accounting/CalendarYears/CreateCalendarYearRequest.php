<?php

namespace Fatpanda\BexioConnector\Request\Accounting\CalendarYears;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/CreateCalendarYear
 */
class CreateCalendarYearRequest extends Request
{
    const API_PATH = '/accounting/calendar_years';
    const API_METHOD = 'POST';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Accounting\CalendarYear';
}
