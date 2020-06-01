<?php

namespace Fatpanda\BexioConnector\Request\Sales\Deliveries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListDeliveries
 */
class ListDeliveriesRequest extends Request
{
    const API_PATH = '/kb_delivery';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Sales\Delivery>';
}
