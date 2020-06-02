<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Notes;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBodyItem;

class NotesSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_EVENT_START = 'event_start';
    public const SEARCH_FIELD_CONTACT_ID = 'contact_id';
    public const SEARCH_FIELD_USER_ID = 'user_id';
    public const SEARCH_FIELD_SUBJECT = 'subject';
    public const SEARCH_FIELD_MODULE_ID = 'module_id';
    public const SEARCH_FIELD_ENTRY_ID = 'entry_id';
}
