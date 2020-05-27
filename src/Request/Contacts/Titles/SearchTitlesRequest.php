<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Titles;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchTitles
 */
class SearchTitlesRequest extends Request
{
    const API_PATH = '/title/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Contacts\Title>';
}
