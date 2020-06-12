<?php

namespace Fatpanda\BexioConnector\Request\Accounting\Taxes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowTax
 */
class ShowTaxRequest extends Request
{
    const API_PATH = '/taxes/{tax_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Accounting\Tax';
}
