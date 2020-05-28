<?php

namespace Fatpanda\BexioConnector\Request\Projects\Timesheets;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowTimesheet
 */
class ShowTimesheetRequest extends Request
{
    const API_PATH = '/timesheet/{timesheet_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Projects\Timesheet';
}
