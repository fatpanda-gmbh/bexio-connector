<?php

namespace Fatpanda\BexioConnector\Request\Projects\CommunicationTypes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListCommunicationTypes
 */
class ListCommunicationTypesRequest extends Request
{
    const API_PATH = '/communication_kind';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Projects\CommunicationType>';
}
