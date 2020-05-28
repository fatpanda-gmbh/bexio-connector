<?php

namespace Fatpanda\BexioConnector\Request\Other\Countries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteCountry
 */
class DeleteCountryRequest extends Request
{
    const API_PATH = '/country/{country_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
