<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\Contacts;

use Fatpanda\BexioConnector\RequestBody\AbstractBulkBody;

class ContactBulkBody extends AbstractBulkBody
{
    protected const ITEM_CLASS = ContactBody::class;
}
