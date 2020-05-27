<?php

namespace Fatpanda\BexioConnector\Response;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use Fatpanda\BexioConnector\Message\Response;

class SuccessResponse extends Response
{
    /** @var ContainerInterface|ContainerInterface[] */
    protected $body;

    /**
     * @return bool
     */
    public function isSuccessResponse(): bool
    {
        return true;
    }

    /**
     * @param ContainerInterface|ContainerInterface[] $body
     * @return Response
     */
    public function setBody($body): Response
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return ContainerInterface|ContainerInterface[]
     */
    public function getBody()
    {
        return $this->body;
    }
}
