<?php

namespace Fatpanda\BexioConnector\Request\Accounting\ManualEntries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListManualEntryFiles
 */
class ListManualEntryFilesRequest extends Request
{
    const API_PATH = '/accounting/manual_entries/{manual_entry_id}/entries/{entry_id}/files';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Accounting\ManualEntryFile>';
}
