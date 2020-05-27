<?php

namespace Fatpanda\BexioConnector\Request\Other\Countries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListCountries
 */
class ListCountriesRequest extends Request
{
    const API_PATH = '/country';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\Country>';
}
