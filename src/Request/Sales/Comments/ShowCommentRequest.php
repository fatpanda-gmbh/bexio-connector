<?php

namespace Fatpanda\BexioConnector\Request\Sales\Comments;

use Fatpanda\BexioConnector\Message\Request;
use Fatpanda\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2ShowComment
 */
class ShowCommentRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/{kb_document_type}/{document_id}/comment/{comment_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\Comment';
}
