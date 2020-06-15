<?php

namespace Fatpanda\BexioConnector\Request\Accounting\ManualEntries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/UploadManualEntryFile
 */
class CreateManualEntryFileRequest extends Request
{
    const API_PATH = '/accounting/manual_entries/{manual_entry_id}/entries/{entry_id}/files';
    const API_METHOD = 'POST';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Accounting\ManualEntryFile';
}
