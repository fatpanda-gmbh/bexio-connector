<?php

namespace Fatpanda\BexioConnector\Request\Contacts\ContactGroups;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateContactGroup
 */
class CreateContactGroupRequest extends Request
{
    const API_PATH = '/contact_group';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Contacts\ContactGroup';
}
