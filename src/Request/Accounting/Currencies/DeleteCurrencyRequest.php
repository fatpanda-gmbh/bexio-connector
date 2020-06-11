<?php

namespace Fatpanda\BexioConnector\Request\Accounting\Currencies;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteCurrency
 */
class DeleteCurrencyRequest extends Request
{
    const API_PATH = '/currencies/{currency_id}';
    const API_METHOD = 'DELETE';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
