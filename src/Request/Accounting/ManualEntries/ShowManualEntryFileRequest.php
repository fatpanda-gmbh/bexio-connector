<?php

namespace Fatpanda\BexioConnector\Request\Accounting\ManualEntries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowManualEntryFile
 */
class ShowManualEntryFileRequest extends Request
{
    const API_PATH = '/accounting/manual_entries/{manual_entry_id}/entries/{entry_id}/files/{file_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Accounting\ManualEntryFileData';
}
