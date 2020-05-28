<?php

namespace Fatpanda\BexioConnector\Request\Other\Notes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchNotes
 */
class SearchNotesRequest extends Request
{
    const API_PATH = '/note/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\Note>';
}
