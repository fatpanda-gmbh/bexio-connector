<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\ContactRelations;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class ContactRelationsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = ContactRelationsSearchBodyItem::class;
}
