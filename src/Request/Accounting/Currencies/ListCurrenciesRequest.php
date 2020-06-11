<?php

namespace Fatpanda\BexioConnector\Request\Accounting\Currencies;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListCurrencies
 */
class ListCurrenciesRequest extends Request
{
    const API_PATH = '/currencies';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Accounting\Currency>';
}
