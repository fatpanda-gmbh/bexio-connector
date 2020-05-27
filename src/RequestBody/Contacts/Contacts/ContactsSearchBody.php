<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\Contacts;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class ContactsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = ContactsSearchBodyItem::class;
}
