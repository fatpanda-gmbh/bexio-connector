<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Tasks;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBodyItem;

class TasksSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_SUBJECT = 'subject';
    public const SEARCH_FIELD_UPDATED_AT = 'updated_at';
    public const SEARCH_FIELD_USER_ID = 'user_id';
    public const SEARCH_FIELD_CONTACT_ID = 'contact_id';
    public const SEARCH_FIELD_TODO_STATUS_ID = 'todo_status_id';
    public const SEARCH_FIELD_MODULE_ID = 'module_id';
    public const SEARCH_FIELD_ENTRY_ID = 'entry_id';
}
