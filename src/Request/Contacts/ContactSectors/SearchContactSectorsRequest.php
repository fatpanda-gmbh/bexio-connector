<?php

namespace Fatpanda\BexioConnector\Request\Contacts\ContactSectors;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchContactSectors
 */
class SearchContactSectorsRequest extends Request
{
    const API_PATH = '/contact_branch/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\ContactSector>';
}
