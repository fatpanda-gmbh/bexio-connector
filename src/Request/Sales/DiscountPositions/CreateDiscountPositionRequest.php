<?php

namespace Fatpanda\BexioConnector\Request\Sales\DiscountPositions;

use Fatpanda\BexioConnector\Message\Request;
use Fatpanda\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2CreateDiscountPosition
 */
class CreateDiscountPositionRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_discount';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\DiscountPosition';
}
