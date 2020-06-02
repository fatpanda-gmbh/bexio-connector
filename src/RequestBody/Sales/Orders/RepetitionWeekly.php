<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Orders;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class RepetitionWeekly implements RepetitionInterface
{
    public const WEEKDAY_MONDAY = 'monday';
    public const WEEKDAY_TUESDAY = 'tuesday';
    public const WEEKDAY_WEDNESDAY = 'wednesday';
    public const WEEKDAY_THURSDAY = 'thursday';
    public const WEEKDAY_FRIDAY = 'friday';
    public const WEEKDAY_SATURDAY = 'saturday';
    public const WEEKDAY_SUNDAY = 'sunday';

    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'weekly';

    /**
     * @var integer
     * @SerializedName("interval")
     * @Type("integer")
     */
    protected $interval;

    /**
     * @var array
     * @SerializedName("weekdays")
     * @Type("array")
     */
    protected $weekdays;

    /**
     * @param int $interval
     * @return RepetitionWeekly
     */
    public function setInterval(int $interval): RepetitionWeekly
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @param array $weekdays
     * @return RepetitionWeekly
     */
    public function setWeekdays(array $weekdays): RepetitionWeekly
    {
        $this->weekdays = $weekdays;
        return $this;
    }
}
