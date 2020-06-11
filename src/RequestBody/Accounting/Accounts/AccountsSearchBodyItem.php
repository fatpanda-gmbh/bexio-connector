<?php

namespace Fatpanda\BexioConnector\RequestBody\Accounting\Accounts;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBodyItem;

class AccountsSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_ACCOUNT_NO = 'account_no';
    public const SEARCH_FIELD_FIBU_ACCOUNT_GROUP_ID = 'fibu_account_group_id';
    public const SEARCH_FIELD_NAME = 'name';
    public const SEARCH_FIELD_ACCOUNT_TYPE = 'account_type';
}
