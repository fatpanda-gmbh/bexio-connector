<?php

namespace Fatpanda\BexioConnector\Request\Contacts\ContactRelations;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateContactRelation
 */
class CreateContactRelationRequest extends Request
{
    const API_PATH = '/contact_relation';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Contacts\ContactRelation';
}
