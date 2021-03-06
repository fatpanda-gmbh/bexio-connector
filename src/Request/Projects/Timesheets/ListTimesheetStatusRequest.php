<?php

namespace Fatpanda\BexioConnector\Request\Projects\Timesheets;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListTimeSheetStatus
 */
class ListTimesheetStatusRequest extends Request
{
    const API_PATH = '/timesheet_status';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Projects\TimesheetStatus>';
}
