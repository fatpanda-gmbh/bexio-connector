<?php

namespace Fatpanda\BexioConnector\Request\Items\StockAreas;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchStockAreas
 */
class SearchStockAreasRequest extends Request
{
    const API_PATH = '/stock_place/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Items\StockArea>';
}
