<?php

namespace Fatpanda\BexioConnector\RequestBody;

interface RequestBodyInterface
{
    /**
     * @return self|SearchBodyItemInterface[]|RequestBodyInterface[]
     */
    public function getBody();
}
