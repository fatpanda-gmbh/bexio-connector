<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\AdditionalAddresses;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBodyItem;

class AdditionalAddressesSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_NAME = 'name';
    public const SEARCH_FIELD_ADDRESS = 'address';
    public const SEARCH_FIELD_POSTCODE = 'postcode';
    public const SEARCH_FIELD_CITY = 'city';
    public const SEARCH_FIELD_COUNTRY_ID = 'country_id';
    public const SEARCH_FIELD_SUBJECT = 'subject';
    public const SEARCH_FIELD_EMAIL = 'email';
}
