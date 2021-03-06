<?php

namespace Fatpanda\BexioConnector\Request\Sales\ItemPositions;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditItemPosition
 */
class EditItemPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_article/{position_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\ItemPosition';
}
