<?php

namespace Fatpanda\BexioConnector\Request\Accounting\ManualEntries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListManualEntries
 */
class ListManualEntriesRequest extends Request
{
    const API_PATH = '/accounting/manual_entries';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Accounting\ManualEntry>';
}
