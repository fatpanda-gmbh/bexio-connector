<?php

namespace Fatpanda\BexioConnector\RequestBody;

abstract class AbstractSearchBody implements RequestBodyInterface, SearchBodyInterface
{
    protected const ITEM_CLASS = '';

    /**
     * @var array|SearchBodyItemInterface[]
     */
    protected $items;

    /**
     * @param SearchBodyItemInterface $item
     * @return $this
     */
    protected function addItem(SearchBodyItemInterface $item): self
    {
        $this->items[] = $item;

        return $this;
    }

    public function createItem(): SearchBodyItemInterface
    {
        $class = static::ITEM_CLASS;
        $item = new $class();

        $this->addItem($item);

        return $item;
    }

    /**
     * @return array|SearchBodyItemInterface[]
     */
    public function getBody(): array
    {
        return $this->items ?? [];
    }
}
