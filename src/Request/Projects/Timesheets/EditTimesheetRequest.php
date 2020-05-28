<?php

namespace Fatpanda\BexioConnector\Request\Projects\Timesheets;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditTimesheet
 */
class EditTimesheetRequest extends Request
{
    const API_PATH = '/timesheet/{timesheet_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Projects\Timesheet';
}
