<?php

namespace Fatpanda\BexioConnector\Request\Sales\Orders;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateDeliveryFromOrder
 */
class CreateDeliveryFromOrderRequest extends Request
{
    const API_PATH = '/kb_order/{order_id}/delivery';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\Delivery';
}
