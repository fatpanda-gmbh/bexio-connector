<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Contacts;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateContact
 */
class CreateContactRequest extends Request
{
    const API_PATH = '/contact';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Contacts\Contact';
}
