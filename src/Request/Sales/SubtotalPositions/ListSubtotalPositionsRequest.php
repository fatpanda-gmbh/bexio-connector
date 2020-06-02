<?php

namespace Fatpanda\BexioConnector\Request\Sales\SubtotalPositions;

use Fatpanda\BexioConnector\Message\Request;
use Fatpanda\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2ListSubtotalPositions
 */
class ListSubtotalPositionsRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_subtotal';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Sales\SubtotalPosition>';
}
