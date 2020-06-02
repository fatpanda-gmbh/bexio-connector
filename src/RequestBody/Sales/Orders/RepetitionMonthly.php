<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Orders;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class RepetitionMonthly implements RepetitionInterface
{
    public const SCHEDULE_FIXED_DAY = 'fixed_day';
    public const SCHEDULE_WEEK_DAY = 'week_day';
    public const SCHEDULE_FIRST_DAY = 'first_day';
    public const SCHEDULE_LAST_DAY = 'last_day';

    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'monthly';

    /**
     * @var integer
     * @SerializedName("interval")
     * @Type("integer")
     */
    protected $interval;

    /**
     * @var string
     * @SerializedName("schedule")
     * @Type("string")
     */
    protected $schedule;

    /**
     * @param int $interval
     * @return RepetitionMonthly
     */
    public function setInterval(int $interval): RepetitionMonthly
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @param string $schedule
     * @return RepetitionMonthly
     */
    public function setSchedule(string $schedule): RepetitionMonthly
    {
        $this->schedule = $schedule;
        return $this;
    }
}
