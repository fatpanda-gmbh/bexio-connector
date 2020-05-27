<?php

namespace Fatpanda\BexioConnector\Request\Contacts\ContactRelations;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListContactRelations
 */
class ListContactRelationsRequest extends Request
{
    const API_PATH = '/contact_relation';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\ContactRelation>';
}
