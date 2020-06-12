<?php

namespace Fatpanda\BexioConnector\Request\Accounting\Taxes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListTaxes
 */
class ListTaxesRequest extends Request
{
    const API_PATH = '/taxes';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Accounting\Tax>';
}
