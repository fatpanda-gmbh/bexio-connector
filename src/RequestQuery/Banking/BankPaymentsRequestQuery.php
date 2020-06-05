<?php

namespace Fatpanda\BexioConnector\RequestQuery\Banking;

use DateTime;
use Fatpanda\BexioConnector\RequestQuery\LimitRequestQuery;

class BankPaymentsRequestQuery extends LimitRequestQuery
{
    /**
     * @var DateTime
     */
    protected $from;

    /**
     * @var DateTime
     */
    protected $to;

    /**
     * @var string|integer
     */
    protected $billId;

    /**
     * @param DateTime $from
     * @return BankPaymentsRequestQuery
     */
    public function setFrom(DateTime $from): BankPaymentsRequestQuery
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @param DateTime $to
     * @return BankPaymentsRequestQuery
     */
    public function setTo(DateTime $to): BankPaymentsRequestQuery
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @param int|string $billId
     * @return BankPaymentsRequestQuery
     */
    public function setBillId($billId)
    {
        $this->billId = $billId;
        return $this;
    }

    public function toArray(): array
    {
        $query = parent::toArray();

        $query['from'] = $this->from;
        $query['to'] = $this->to;
        $query['bill_id'] = $this->billId;

        return $query;
    }
}
