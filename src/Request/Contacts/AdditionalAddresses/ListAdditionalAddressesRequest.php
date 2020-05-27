<?php

namespace Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListAdditionalAddresses
 */
class ListAdditionalAddressesRequest extends Request
{
    const API_PATH = '/contact/{contact_id}/additional_address';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\AdditionalAddress>';
}
