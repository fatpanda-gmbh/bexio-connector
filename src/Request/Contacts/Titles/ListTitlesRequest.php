<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Titles;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListTitles
 */
class ListTitlesRequest extends Request
{
    const API_PATH = '/title';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\Title>';
}
