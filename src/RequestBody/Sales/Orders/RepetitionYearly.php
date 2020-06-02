<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Orders;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class RepetitionYearly implements RepetitionInterface
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'yearly';

    /**
     * @var integer
     * @SerializedName("interval")
     * @Type("integer")
     */
    protected $interval;

    /**
     * @param int $interval
     * @return RepetitionYearly
     */
    public function setInterval(int $interval): RepetitionYearly
    {
        $this->interval = $interval;
        return $this;
    }
}
