<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Titles;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowTitle
 */
class ShowTitleRequest extends Request
{
    const API_PATH = '/title/{title_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Contacts\Title';
}
