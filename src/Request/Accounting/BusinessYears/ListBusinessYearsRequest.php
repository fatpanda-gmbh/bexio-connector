<?php

namespace Fatpanda\BexioConnector\Request\Accounting\BusinessYears;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListBusinessYears
 */
class ListBusinessYearsRequest extends Request
{
    const API_PATH = '/accounting/business_years';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Accounting\BusinessYear>';
}
