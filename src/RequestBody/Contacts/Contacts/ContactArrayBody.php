<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\Contacts;

use Fatpanda\BexioConnector\RequestBody\AbstractArrayBody;

class ContactArrayBody extends AbstractArrayBody
{
    protected const ITEM_CLASS = ContactBody::class;

    public function createItem(): ContactBody
    {
        return parent::createItem();
    }
}
