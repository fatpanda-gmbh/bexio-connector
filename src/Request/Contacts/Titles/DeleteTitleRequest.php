<?php

namespace Fatpanda\BexioConnector\Request\Contacts\Titles;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeleteTitle
 */
class DeleteTitleRequest extends Request
{
    const API_PATH = '/title/{title_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
