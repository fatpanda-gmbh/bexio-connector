<?php

namespace Fatpanda\BexioConnector\Request\Sales\DefaultPositions;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditefaultPosition
 */
class EditDefaultPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_custom/{position_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\DefaultPosition';
}
