<?php

namespace Fatpanda\BexioConnector\RequestBody\Accounting\Accounts;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class AccountsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = AccountsSearchBodyItem::class;
}
