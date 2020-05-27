<?php

namespace Fatpanda\BexioConnector\Request\Other\Languages;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListLanguages
 */
class ListLanguagesRequest extends Request
{
    const API_PATH = '/language';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\Language>';
}
