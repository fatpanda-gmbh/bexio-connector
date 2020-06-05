<?php

namespace Fatpanda\BexioConnector\Container\Banking;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class BankPaymentAmount implements ContainerInterface
{
    /**
     * @var string
     * @SerializedName("currency")
     * @Type("string")
     */
    protected $currency;

    /**
     * @var float
     * @SerializedName("amount")
     * @Type("float")
     */
    protected $amount;

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
}
