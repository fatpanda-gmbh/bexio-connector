<?php

namespace Fatpanda\BexioConnector\RequestBody\Projects\Timesheets;

use Fatpanda\BexioConnector\RequestBody\AbstractSearchBodyItem;

class TimesheetsSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_ID = 'id';
    public const SEARCH_FIELD_CLIENT_SERVICE_ID = 'client_service_id';
    public const SEARCH_FIELD_CONTACT_ID = 'contact_id';
    public const SEARCH_FIELD_USER_ID = 'user_id';
    public const SEARCH_FIELD_PR_PROJECT_ID = 'pr_project_id';
    public const SEARCH_FIELD_STATUS_ID = 'status_id';
}
