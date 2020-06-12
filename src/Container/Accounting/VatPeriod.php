<?php

namespace Fatpanda\BexioConnector\Container\Accounting;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class VatPeriod implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

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
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var string
     * @SerializedName("status")
     * @Type("string")
     */
    protected $status;

    /**
     * @var DateTime
     * @SerializedName("closed_at")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $closedAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return DateTime
     */
    public function getClosedAt(): DateTime
    {
        return $this->closedAt;
    }
}
