<?php

namespace Fatpanda\BexioConnector\Request\Projects\BusinessActivities;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListBusinessActivities
 */
class ListBusinessActivitiesRequest extends Request
{
    const API_PATH = '/client_service';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Projects\BusinessActivity>';
}
