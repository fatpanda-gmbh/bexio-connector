<?php

namespace Fatpanda\BexioConnector\Request\Accounting\Taxes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteTax
 */
class DeleteTaxRequest extends Request
{
    const API_PATH = '/taxes/{tax_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
