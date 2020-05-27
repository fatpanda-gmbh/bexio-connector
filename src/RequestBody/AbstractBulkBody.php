<?php

namespace Fatpanda\BexioConnector\RequestBody;

abstract class AbstractBulkBody implements RequestBodyInterface
{
    protected const ITEM_CLASS = '';

    /**
     * @var array|RequestBodyItemInterface[]
     */
    protected $items;

    /**
     * @param RequestBodyItemInterface $item
     * @return $this
     */
    protected function addItem(RequestBodyItemInterface $item): self
    {
        $this->items[] = $item;

        return $this;
    }

    public function createItem(): RequestBodyItemInterface
    {
        $class = static::ITEM_CLASS;
        $item = new $class();

        $this->addItem($item);

        return $item;
    }

    /**
     * @return array|RequestBodyItemInterface[]
     */
    public function getBody(): array
    {
        return $this->items ?? [];
    }
}
