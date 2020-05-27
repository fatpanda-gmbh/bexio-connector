<?php

namespace Fatpanda\BexioConnector\Request\Other\Companies;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowCompanyProfile
 */
class ShowCompanyRequest extends Request
{
    const API_PATH = '/company_profile/{profile_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Other\Company';
}
