<?php

namespace Fatpanda\BexioConnector\Request\Accounting\VatPeriods;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListVatPeriods
 */
class ListVatPeriodsRequest extends Request
{
    const API_PATH = '/accounting/vat_periods';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Accounting\VatPeriod>';
}
