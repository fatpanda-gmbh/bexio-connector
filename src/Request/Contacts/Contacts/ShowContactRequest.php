<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Contacts;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowContact
 */
class ShowContactRequest extends Request
{
    const API_PATH = '/contact/{contact_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Contacts\Contact';
}
