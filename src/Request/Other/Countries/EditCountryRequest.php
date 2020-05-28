<?php

namespace Fatpanda\BexioConnector\Request\Other\Countries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditCountry
 */
class EditCountryRequest extends Request
{
    const API_PATH = '/country/{country_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Other\Country';
}
