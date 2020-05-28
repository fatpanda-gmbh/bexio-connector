<?php

namespace Fatpanda\BexioConnector\Request\Projects\Projects;

use Fatpanda\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditProject
 */
class EditProjectRequest extends Request
{
    const API_PATH = '/pr_project/{project_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Projects\Project';
}
