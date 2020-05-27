<?php

namespace Fatpanda\BexioConnector\Request\Contacts\ContactGroups;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeleteContactGroup
 */
class DeleteContactGroupRequest extends Request
{
    const API_PATH = '/contact_group/{contact_group_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
