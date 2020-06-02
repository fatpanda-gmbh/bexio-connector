<?php

namespace Fatpanda\BexioConnector\Request\Sales\Deliveries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowDelivery
 */
class ShowDeliveryRequest extends Request
{
    const API_PATH = '/kb_delivery/{delivery_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\Delivery';
}
