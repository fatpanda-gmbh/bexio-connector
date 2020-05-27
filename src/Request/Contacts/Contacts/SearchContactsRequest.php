<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Contacts;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchContacts
 */
class SearchContactsRequest extends Request
{
    const API_PATH = '/contact/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\Contact>';
}
