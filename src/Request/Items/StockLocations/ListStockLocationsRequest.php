<?php

namespace Fatpanda\BexioConnector\Request\Items\StockLocations;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListStockLocations
 */
class ListStockLocationsRequest extends Request
{
    const API_PATH = '/stock';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Items\StockLocation>';
}
