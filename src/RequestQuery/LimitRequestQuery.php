<?php

namespace Fatpanda\BexioConnector\RequestQuery;

abstract class LimitRequestQuery implements RequestQueryInterface
{
    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var int|null
     */
    protected $offset;

    /**
     * @param int|null $limit
     * @return LimitRequestQuery
     */
    public function setLimit(?int $limit): LimitRequestQuery
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @param int|null $offset
     * @return LimitRequestQuery
     */
    public function setOffset(?int $offset): LimitRequestQuery
    {
        $this->offset = $offset;
        return $this;
    }

    public function toArray(): array
    {
        $query = [];

        if (isset($this->limit)) {
            $query['limit'] = $this->limit;
        }

        if (isset($this->offset)) {
            $query['offset'] = $this->offset;
        }

        return $query;
    }
}
