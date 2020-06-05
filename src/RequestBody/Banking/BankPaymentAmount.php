<?php

namespace Fatpanda\BexioConnector\RequestBody\Banking;

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
     * @param string $currency
     * @return BankPaymentAmount
     */
    public function setCurrency(string $currency): BankPaymentAmount
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param float $amount
     * @return BankPaymentAmount
     */
    public function setAmount(float $amount): BankPaymentAmount
    {
        $this->amount = $amount;
        return $this;
    }
}
