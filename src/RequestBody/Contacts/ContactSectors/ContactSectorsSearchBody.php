<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\ContactSectors;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class ContactSectorsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = TitlesSearchBodyItem::class;
}
