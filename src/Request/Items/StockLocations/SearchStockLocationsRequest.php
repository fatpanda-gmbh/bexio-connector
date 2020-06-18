<?php

namespace Fatpanda\BexioConnector\Request\Items\StockLocations;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchStockLocations
 */
class SearchStockLocationsRequest extends Request
{
    const API_PATH = '/stock/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Items\StockLocation>';
}
