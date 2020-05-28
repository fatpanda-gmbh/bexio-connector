<?php

namespace Fatpanda\BexioConnector\Request\Other\Notes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditNote
 */
class EditNoteRequest extends Request
{
    const API_PATH = '/note/{note_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Other\Note';
}
