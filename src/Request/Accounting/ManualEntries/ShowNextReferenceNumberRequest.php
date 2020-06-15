<?php

namespace Fatpanda\BexioConnector\Request\Accounting\ManualEntries;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/GetNextReferenceNumber
 */
class ShowNextReferenceNumberRequest extends Request
{
    const API_PATH = '/accounting/manual_entries/next_ref_nr';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Accounting\NextReferenceNumber';
}
