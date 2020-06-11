<?php

namespace Fatpanda\BexioConnector\Container\Accounting;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CalendarYear implements ContainerInterface
{
    /**
     * @var integer
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

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
     * @var boolean
     * @SerializedName("is_vat_subject")
     * @Type("boolean")
     */
    protected $isVatSubject;

    /**
     * @var DateTime
     * @SerializedName("created_at")
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $createdAt;

    /**
     * @var DateTime
     * @SerializedName("updated_at")
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $updatedAt;

    /**
     * @var string|null
     * @SerializedName("vat_accounting_method")
     * @Type("string")
     */
    protected $vatAccountingMethod;

    /**
     * @var string|null
     * @SerializedName("vat_accounting_type")
     * @Type("string")
     */
    protected $vatAccountingType;

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
     * @return bool
     */
    public function isVatSubject(): bool
    {
        return $this->isVatSubject;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @return string|null
     */
    public function getVatAccountingMethod(): ?string
    {
        return $this->vatAccountingMethod;
    }

    /**
     * @return string|null
     */
    public function getVatAccountingType(): ?string
    {
        return $this->vatAccountingType;
    }
}
