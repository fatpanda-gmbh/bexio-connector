<?php

namespace Fatpanda\BexioConnector\RequestQuery\Banking;

use DateTime;
use Fatpanda\BexioConnector\RequestQuery\LimitRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\RequestQueryInterface;

class UpdateBankPaymentRequestQuery implements RequestQueryInterface
{
    /**
     * @var string
     */
    protected $iban;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @param string $iban
     * @return UpdateBankPaymentRequestQuery
     */
    public function setIban(string $iban): UpdateBankPaymentRequestQuery
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @param int $id
     * @return UpdateBankPaymentRequestQuery
     */
    public function setId(int $id): UpdateBankPaymentRequestQuery
    {
        $this->id = $id;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'iban' => $this->iban,
            'id' => $this->id,
        ];
    }
}
