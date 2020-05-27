<?php

namespace Fatpanda\BexioConnector\Request\Contacts\ContactRelations;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchContactRelations
 */
class SearchContactRelationsRequest extends Request
{
    const API_PATH = '/contact_relation/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\ContactRelation>';
}
