<?php

namespace Fatpanda\BexioConnector\Container\Banking;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class BankISPayment extends AbstractBankPayment
{
    /**
     * @var ISPayment
     * @SerializedName("payment")
     * @Type("ISPayment")
     */
    protected $payment;

    /**
     * @return ISPayment
     */
    public function getPayment(): ISPayment
    {
        return $this->payment;
    }
}
