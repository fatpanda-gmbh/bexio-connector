<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Notes;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBody;

class NotesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = NotesSearchBodyItem::class;
}
