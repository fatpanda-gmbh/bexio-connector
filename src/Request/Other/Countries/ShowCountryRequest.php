<?php

namespace Fatpanda\BexioConnector\Request\Other\Countries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowTitle
 */
class ShowCountryRequest extends Request
{
    const API_PATH = '/country/{country_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Other\Country';
}
