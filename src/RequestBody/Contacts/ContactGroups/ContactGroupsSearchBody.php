<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\ContactGroups;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class ContactGroupsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = ContactGroupsSearchBodyItem::class;
}
