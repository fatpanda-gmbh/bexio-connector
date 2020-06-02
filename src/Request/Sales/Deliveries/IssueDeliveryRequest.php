<?php

namespace Fatpanda\BexioConnector\Request\Sales\Deliveries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2IssueDelivery
 */
class IssueDeliveryRequest extends Request
{
    const API_PATH = '/kb_delivery/{delivery_id}/issue';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Success';
}
