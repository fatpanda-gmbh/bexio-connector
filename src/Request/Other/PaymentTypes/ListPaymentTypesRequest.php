<?php

namespace Fatpanda\BexioConnector\Request\Other\PaymentTypes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListPaymentTypes
 */
class ListPaymentTypesRequest extends Request
{
    const API_PATH = '/payment_type';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\PaymentType>';
}
