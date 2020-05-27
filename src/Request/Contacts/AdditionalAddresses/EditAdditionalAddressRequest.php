<?php

namespace Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditAdditionalAddress
 */
class EditAdditionalAddressRequest extends Request
{
    const API_PATH = '/contact/{contact_id}/additional_address/{additional_address_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Contacts\AdditionalAddress';
}
