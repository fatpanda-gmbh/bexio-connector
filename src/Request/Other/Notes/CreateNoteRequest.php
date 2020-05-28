<?php

namespace Fatpanda\BexioConnector\Request\Other\Notes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateNote
 */
class CreateNoteRequest extends Request
{
    const API_PATH = '/note';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Other\Note';
}
