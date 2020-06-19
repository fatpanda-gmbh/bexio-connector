<?php

namespace Fatpanda\BexioConnector\Container\Accounting;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ExchangeRate implements ContainerInterface
{
    /**
     * @var float
     * @SerializedName("factor_nr")
     * @Type("float")
     */
    protected $factorNr;

    /**
     * @var Currency
     * @SerializedName("exchange_currency")
     * @Type("Fatpanda\BexioConnector\Container\Accounting\Currency")
     */
    protected $exchangeCurrency;

    /**
     * @return float
     */
    public function getFactorNr(): float
    {
        return $this->factorNr;
    }

    /**
     * @return Currency
     */
    public function getExchangeCurrency(): Currency
    {
        return $this->exchangeCurrency;
    }
}
