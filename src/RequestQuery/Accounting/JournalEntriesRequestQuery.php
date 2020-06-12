<?php

namespace Fatpanda\BexioConnector\RequestQuery\Accounting;

use Fatpanda\BexioConnector\RequestQuery\LimitRequestQuery;

class JournalEntriesRequestQuery extends LimitRequestQuery
{
    /**
     * @var string|null
     */
    protected $from;

    /**
     * @var string|null
     */
    protected $to;

    /**
     * @var string|integer
     */
    protected $accountUuid;

    /**
     * @param string|null $from
     * @return JournalEntriesRequestQuery
     */
    public function setFrom(?string $from): JournalEntriesRequestQuery
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @param string|null $to
     * @return JournalEntriesRequestQuery
     */
    public function setTo(?string $to): JournalEntriesRequestQuery
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @param int|string $accountUuid
     * @return JournalEntriesRequestQuery
     */
    public function setAccountUuid($accountUuid)
    {
        $this->accountUuid = $accountUuid;
        return $this;
    }

    public function toArray(): array
    {
        $query = parent::toArray();

        $query['from'] = $this->from;
        $query['to'] = $this->to;
        $query['account_uuid'] = $this->accountUuid;

        return $query;
    }
}
