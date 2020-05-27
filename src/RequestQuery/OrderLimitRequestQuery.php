<?php

namespace Fatpanda\BexioConnector\RequestQuery;

abstract class OrderLimitRequestQuery extends LimitRequestQuery
{
    public const SORT_ORDER_ASC = 'asc';
    public const SORT_ORDER_DESC = 'desc';
    public const SORT_ORDERS = [
        self::SORT_ORDER_ASC,
        self::SORT_ORDER_DESC,
    ];

    /**
     * Array of order parameters
     * ['id'] or ['id' => 'desc']
     *
     * @var array|null
     */
    protected $orderBy;

    /**
     * @param array|null $orderBy
     * @return LimitRequestQuery
     */
    public function setOrderBy(?array $orderBy): LimitRequestQuery
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    public function toArray(): array
    {
        $query = parent::toArray();

        if (isset($this->orderBy)) {
            $orderBy = [];
            array_walk($this->orderBy, function($val, $key) use(&$orderBy) {
                if (in_array($val, self::SORT_ORDERS)) {
                    $orderBy[] = "{$key}_{$val}";
                } else {
                    $orderBy[] = $key;
                }
            });

            $query['order_by'] = implode(', ', $orderBy);
        }

        return $query;
    }
}
