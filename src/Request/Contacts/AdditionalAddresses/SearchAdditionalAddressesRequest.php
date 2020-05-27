<?php

namespace Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchAdditionalAddresses
 */
class SearchAdditionalAddressesRequest extends Request
{
    const API_PATH = '/contact/{contact_id}/additional_address/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\AdditionalAddress>';
}
