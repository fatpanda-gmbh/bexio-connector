<?php

namespace Fatpanda\BexioConnector\RequestBody\Projects\Timesheets;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class TimesheetRangeBody
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'range';

    /**
     * @var DateTime
     * @SerializedName("start")
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $start;

    /**
     * @var DateTime
     * @SerializedName("end")
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $end;

    /**
     * @param DateTime $start
     * @return TimesheetRangeBody
     */
    public function setStart(DateTime $start): TimesheetRangeBody
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @param DateTime $end
     * @return TimesheetRangeBody
     */
    public function setEnd(DateTime $end): TimesheetRangeBody
    {
        $this->end = $end;
        return $this;
    }
}
