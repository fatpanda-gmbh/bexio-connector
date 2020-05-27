<?php

namespace Fatpanda\BexioConnector\Request\Contacts\ContactSectors;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListContactSectors
 */
class ListContactSectorsRequest extends Request
{
    const API_PATH = '/contact_branch';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\ContactSector>';
}
