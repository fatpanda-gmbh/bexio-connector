<?php

namespace Fatpanda\BexioConnector\Request\Sales\Orders;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateOrder
 */
class CreateOrderRequest extends Request
{
    const API_PATH = '/kb_order';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\Order';
}
