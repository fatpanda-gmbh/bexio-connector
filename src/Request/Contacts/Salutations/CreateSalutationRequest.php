<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Salutations;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateSalutation
 */
class CreateSalutationRequest extends Request
{
    const API_PATH = '/salutation';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Contacts\Salutation';
}
