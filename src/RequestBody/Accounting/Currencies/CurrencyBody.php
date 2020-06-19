<?php

namespace Fatpanda\BexioConnector\RequestBody\Accounting\Currencies;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CurrencyBody extends AbstractBody
{
    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    protected $name;

    /**
     * @var float
     * @SerializedName("round_factor")
     * @Type("float")
     */
    protected $round_factor;

    /**
     * @param string $name
     * @return CurrencyBody
     */
    public function setName(string $name): CurrencyBody
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param float $round_factor
     * @return CurrencyBody
     */
    public function setRoundFactor(float $round_factor): CurrencyBody
    {
        $this->round_factor = $round_factor;
        return $this;
    }
}
