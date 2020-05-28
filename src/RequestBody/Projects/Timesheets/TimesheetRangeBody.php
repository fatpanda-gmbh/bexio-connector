<?php

namespace Fatpanda\BexioConnector\RequestBody\Projects\Timesheets;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class TimesheetRangeBody implements ContainerInterface
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var DateTime
     * @SerializedName("start")
     * @Type("DateTime<'Y-m-d H:m:i'>")
     */
    protected $start;

    /**
     * @var DateTime
     * @SerializedName("end")
     * @Type("DateTime<'Y-m-d H:m:i'>")
     */
    protected $end;

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
}
