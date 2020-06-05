<?php

namespace Fatpanda\BexioConnector\Container\Banking;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class BankISRPayment extends AbstractBankPayment
{
    /**
     * @var ISRPayment
     * @SerializedName("payment")
     * @Type("ISRPayment")
     */
    protected $payment;

    /**
     * @return ISRPayment
     */
    public function getPayment(): ISRPayment
    {
        return $this->payment;
    }
}
