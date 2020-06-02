<?php

namespace Fatpanda\BexioConnector\Request\Sales\DiscountPositions;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditDiscountPosition
 */
class EditDiscountPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_discount/{position_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\DiscountPosition';
}
