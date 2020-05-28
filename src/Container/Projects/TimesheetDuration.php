<?php

namespace Fatpanda\BexioConnector\Container\Projects;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class TimesheetDuration implements ContainerInterface
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var DateTime
     * @SerializedName("date")
     * @Type("DateTime<'Y-m-d H:m:i'>")
     */
    protected $date;

    /**
     * @var string
     * @SerializedName("duration")
     * @Type("string")
     */
    protected $duration;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }
}
