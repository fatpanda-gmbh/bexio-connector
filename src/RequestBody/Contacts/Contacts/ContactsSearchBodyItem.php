<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\Contacts;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBodyItem;

class ContactsSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_ID = 'id';
    public const SEARCH_FIELD_NAME1 = 'name_1';
    public const SEARCH_FIELD_NAME2 = 'name_2';
    public const SEARCH_FIELD_NR = 'nr';
    public const SEARCH_FIELD_ADDRESS = 'address';
    public const SEARCH_FIELD_MAIL = 'mail';
    public const SEARCH_FIELD_MAIL_SECOND = 'mail_second';
    public const SEARCH_FIELD_POSTCODE = 'postcode';
    public const SEARCH_FIELD_CITY = 'city';
    public const SEARCH_FIELD_COUNTRY_ID = 'country_id';
    public const SEARCH_FIELD_CONTACT_GROUP_IDS = 'contact_group_ids';
    public const SEARCH_FIELD_CONTACT_TYPE_ID = 'contact_type_id';
    public const SEARCH_FIELD_UPDATED_AT = 'updated_at';
    public const SEARCH_FIELD_USER_ID = 'user_id';
    public const SEARCH_FIELD_PHONE_FIXED = 'phone_fixed';
    public const SEARCH_FIELD_PHONE_MOBILE = 'phone_mobile';
    public const SEARCH_FIELD_FAX = 'fax';
}
