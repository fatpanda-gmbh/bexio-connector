<?php

namespace Fatpanda\BexioConnector\Request\Sales\TextPositions;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeleteTextPosition
 */
class DeleteTextPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_text/{position_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
