<?php

namespace Fatpanda\BexioConnector\Request\Sales\Orders;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteOrder
 */
class DeleteOrderRequest extends Request
{
    const API_PATH = '/kb_order/{order_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
