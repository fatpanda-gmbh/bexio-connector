<?php

namespace Fatpanda\BexioConnector\Request\Sales\Comments;

use Fatpanda\BexioConnector\Message\Request;
use Fatpanda\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2CreateComment
 */
class CreateCommentRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/{kb_document_type}/{document_id}/comment';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Fatpanda\BexioConnector\Container\Sales\Comment';
}
