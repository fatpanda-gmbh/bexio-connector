<?php

namespace Fatpanda\BexioConnector\Request\Contacts\ContactGroups;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListContacts
 */
class ListContactGroupsRequest extends Request
{
    const API_PATH = '/contact_group';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\ContactGroup>';
}
