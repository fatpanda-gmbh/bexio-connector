<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Titles;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateTitle
 */
class CreateTitleRequest extends Request
{
    const API_PATH = '/title';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Contacts\Title';
}
