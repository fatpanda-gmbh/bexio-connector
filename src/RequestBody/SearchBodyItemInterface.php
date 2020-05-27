<?php

namespace Fatpanda\BexioConnector\RequestBody;

interface SearchBodyItemInterface
{
    public function setField(string $field): SearchBodyItemInterface;

    public function setValue(string $value): SearchBodyItemInterface;

    public function setCriteria(?string $criteria): SearchBodyItemInterface;
}
