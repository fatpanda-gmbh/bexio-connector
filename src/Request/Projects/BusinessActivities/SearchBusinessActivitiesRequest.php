<?php

namespace Fatpanda\BexioConnector\Request\Projects\BusinessActivities;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchBusinessActivities
 */
class SearchBusinessActivitiesRequest extends Request
{
    const API_PATH = '/client_service/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Projects\BusinessActivity>';
}
