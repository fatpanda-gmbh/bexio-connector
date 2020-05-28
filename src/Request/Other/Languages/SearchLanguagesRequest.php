<?php

namespace Fatpanda\BexioConnector\Request\Other\Languages;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchLanguages
 */
class SearchLanguagesRequest extends Request
{
    const API_PATH = '/language/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\Language>';
}
