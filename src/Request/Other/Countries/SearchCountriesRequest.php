<?php

namespace Fatpanda\BexioConnector\Request\Other\Countries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchCountries
 */
class SearchCountriesRequest extends Request
{
    const API_PATH = '/country/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\Country>';
}
