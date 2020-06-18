<?php

namespace Fatpanda\BexioConnector\Request\Items\StockAreas;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListStockAreas
 */
class ListStockAreasRequest extends Request
{
    const API_PATH = '/stock_place';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Items\StockArea>';
}
