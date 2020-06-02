<?php

namespace Fatpanda\BexioConnector\Request\Sales\DocumentSettings;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListDocumentSettings
 */
class ListDocumentSettingsRequest extends Request
{
    const API_PATH = '/kb_item_setting';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Sales\DocumentSetting>';
}
