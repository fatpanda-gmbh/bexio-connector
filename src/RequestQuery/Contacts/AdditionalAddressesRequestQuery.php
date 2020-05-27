<?php

namespace Fatpanda\BexioConnector\RequestQuery\Contacts;

use Fatpanda\BexioConnector\RequestQuery\OrderLimitRequestQuery;

class AdditionalAddressesRequestQuery extends OrderLimitRequestQuery
{
    public const ORDER_BY_ID = 'id';
    public const ORDER_BY_NAME = 'name';
    public const ORDER_BY_POSTCODE = 'postcode';
    public const ORDER_BY_COUNTRY_ID = 'country_id';
}
