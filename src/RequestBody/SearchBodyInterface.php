<?php

namespace Fatpanda\BexioConnector\RequestBody;

interface SearchBodyInterface
{
    public function createItem(): SearchBodyItemInterface;
}
