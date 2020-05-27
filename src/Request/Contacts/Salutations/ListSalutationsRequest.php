<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Salutations;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListSalutations
 */
class ListSalutationsRequest extends Request
{
    const API_PATH = '/salutation';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\Salutation>';
}
