<?php

namespace Fatpanda\BexioConnector\Request\Projects\Timesheets;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchTimesheets
 */
class SearchTimesheetsRequest extends Request
{
    const API_PATH = '/timesheet/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Projects\Timesheet>';
}
