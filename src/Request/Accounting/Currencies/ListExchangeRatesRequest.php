<?php

namespace Fatpanda\BexioConnector\Request\Accounting\Currencies;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListExchangeRatesForCurrency
 */
class ListExchangeRatesRequest extends Request
{
    const API_PATH = '/currencies/{currency_id}/exchange_rates';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Accounting\ExchangeRate>';
}
