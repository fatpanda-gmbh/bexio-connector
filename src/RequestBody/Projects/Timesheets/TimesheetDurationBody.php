<?php

namespace Fatpanda\BexioConnector\RequestBody\Projects\Timesheets;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class TimesheetDurationBody
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'duration';

    /**
     * @var DateTime
     * @SerializedName("date")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $date;

    /**
     * @var string
     * @SerializedName("duration")
     * @Type("string")
     */
    protected $duration;

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
