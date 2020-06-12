<?php

namespace Fatpanda\BexioConnector\RequestQuery\Accounting;

use Fatpanda\BexioConnector\RequestQuery\LimitRequestQuery;

class TaxesRequestQuery extends LimitRequestQuery
{
    public const FIND_BY_TYPES_SALES_TAX = 'sales_tax';
    public const FIND_BY_TYPES_PRE_TAX = 'pre_tax';

    /**
     * @var string|null
     */
    protected $scope;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @var string|null
     */
    protected $types;

    /**
     * @param string|null $scope
     * @return TaxesRequestQuery
     */
    public function setScope(?string $scope): TaxesRequestQuery
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @param string|null $date
     * @return TaxesRequestQuery
     */
    public function setDate(?string $date): TaxesRequestQuery
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param string|null $types
     * @return TaxesRequestQuery
     */
    public function setTypes(?string $types): TaxesRequestQuery
    {
        $this->types = $types;
        return $this;
    }

    public function toArray(): array
    {
        $query = parent::toArray();

        $query['scope'] = $this->scope;
        $query['date'] = $this->date;
        $query['types'] = $this->types;

        return $query;
    }
}
