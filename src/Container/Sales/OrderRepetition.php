<?php

namespace Fatpanda\BexioConnector\Container\Sales;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class OrderRepetition implements ContainerInterface
{
    /**
     * @var DateTime
     * @SerializedName("start")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $start;

    /**
     * @var DateTime
     * @SerializedName("end")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $end;

    /**
     * @var array
     * @SerializedName("repetition")
     * @Type("array")
     */
    protected $repetition;

    /**
     * @return DateTime
     */
    public function getStart(): DateTime
    {
        return $this->start;
    }

    /**
     * @return DateTime
     */
    public function getEnd(): DateTime
    {
        return $this->end;
    }

    /**
     * @return array
     */
    public function getRepetition(): array
    {
        return $this->repetition;
    }
}
