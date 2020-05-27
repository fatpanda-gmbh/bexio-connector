<?php

namespace Fatpanda\BexioConnector\Request\Contacts\ContactGroups;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchContactGroups
 */
class SearchContactGroupsRequest extends Request
{
    const API_PATH = '/contact_group/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\ContactGroup>';
}
