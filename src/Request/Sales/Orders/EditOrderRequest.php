<?php

namespace Fatpanda\BexioConnector\Request\Sales\Orders;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditOrder
 */
class EditOrderRequest extends Request
{
    const API_PATH = '/kb_order/{order_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\Order';
}
