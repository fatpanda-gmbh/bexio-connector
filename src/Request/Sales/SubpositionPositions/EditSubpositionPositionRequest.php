<?php

namespace Fatpanda\BexioConnector\Request\Sales\SubpositionPositions;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditSubpositionPosition
 */
class EditSubpositionPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_subposition/{position_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\SubpositionPosition';
}
