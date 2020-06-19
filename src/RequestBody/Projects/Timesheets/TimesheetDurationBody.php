<?php

namespace Fatpanda\BexioConnector\RequestBody\Projects\Timesheets;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class TimesheetDurationBody implements ContainerInterface
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
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $date;

    /**
     * @var string
     * @SerializedName("duration")
     * @Type("string")
     */
    protected $duration;

    /**
     * @param string $type
     * @return TimesheetDurationBody
     */
    public function setType(string $type): TimesheetDurationBody
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param DateTime $date
     * @return TimesheetDurationBody
     */
    public function setDate(DateTime $date): TimesheetDurationBody
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param string $duration
     * @return TimesheetDurationBody
     */
    public function setDuration(string $duration): TimesheetDurationBody
    {
        $this->duration = $duration;
        return $this;
    }
}
