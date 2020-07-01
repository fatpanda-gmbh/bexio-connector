<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Orders;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class OrderRepetitionBody extends AbstractBody
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
     * @var RepetitionInterface
     * @SerializedName("repetition")
     */
    protected $repetition;

    /**
     * @param DateTime $start
     * @return OrderRepetitionBody
     */
    public function setStart(DateTime $start): OrderRepetitionBody
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @param DateTime $end
     * @return OrderRepetitionBody
     */
    public function setEnd(DateTime $end): OrderRepetitionBody
    {
        $this->end = $end;
        return $this;
    }

    /**
     * @param RepetitionInterface $repetition
     * @return OrderRepetitionBody
     */
    public function setRepetition(RepetitionInterface $repetition): OrderRepetitionBody
    {
        $this->repetition = $repetition;
        return $this;
    }
}
