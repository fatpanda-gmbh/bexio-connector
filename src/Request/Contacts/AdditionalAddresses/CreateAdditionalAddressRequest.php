<?php

namespace Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateAdditionalAddress
 */
class CreateAdditionalAddressRequest extends Request
{
    const API_PATH = '/contact/{contact_id}/additional_address';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Contacts\AdditionalAddress';
}
