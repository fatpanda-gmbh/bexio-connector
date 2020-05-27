<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\AdditionalAddresses;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class AdditionalAddressesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = AdditionalAddressesSearchBodyItem::class;
}
