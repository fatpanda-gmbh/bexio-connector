<?php

namespace Fatpanda\BexioConnector\Request\Other\Companies;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListCompanyProfile
 */
class ListCompaniesRequest extends Request
{
    const API_PATH = '/company_profile';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Fatpanda\BexioConnector\Container\Other\Company>';
}
