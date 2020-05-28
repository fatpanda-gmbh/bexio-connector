<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\PaymentTypes;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class PaymentTypesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = PaymentTypesSearchBodyItem::class;
}
