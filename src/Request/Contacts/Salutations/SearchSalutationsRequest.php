<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Salutations;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchSalutations
 */
class SearchSalutationsRequest extends Request
{
    const API_PATH = '/salutation/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\Salutation>';
}
