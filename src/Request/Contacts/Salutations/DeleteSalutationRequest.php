<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Salutations;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeleteSalutation
 */
class DeleteSalutationRequest extends Request
{
    const API_PATH = '/salutation/{salutation_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
