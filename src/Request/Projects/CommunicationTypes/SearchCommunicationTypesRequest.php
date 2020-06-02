<?php

namespace Fatpanda\BexioConnector\Request\Projects\CommunicationTypes;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchCommunicationTypes
 */
class SearchCommunicationTypesRequest extends Request
{
    const API_PATH = '/communication_kind/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Projects\CommunicationType>';
}
