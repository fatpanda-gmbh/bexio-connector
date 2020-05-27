<?php

namespace Fatpanda\BexioConnector\Message;

abstract class Response
{
    abstract public function isSuccessResponse(): bool;
}
