<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Contacts;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListContacts
 */
class ListContactsRequest extends Request
{
    const API_PATH = '/contact';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\Contact>';
}
