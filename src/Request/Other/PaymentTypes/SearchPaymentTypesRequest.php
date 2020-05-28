<?php

namespace Fatpanda\BexioConnector\Request\Other\PaymentTypes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchPaymentTypes
 */
class SearchPaymentTypesRequest extends Request
{
    const API_PATH = '/payment_type/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\PaymentType>';
}
