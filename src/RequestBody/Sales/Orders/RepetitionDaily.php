<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Orders;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class RepetitionDaily implements RepetitionInterface
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'daily';

    /**
     * @var integer
     * @SerializedName("interval")
     * @Type("integer")
     */
    protected $interval;

    /**
     * @param int $interval
     * @return RepetitionDaily
     */
    public function setInterval(int $interval): RepetitionDaily
    {
        $this->interval = $interval;
        return $this;
    }
}
