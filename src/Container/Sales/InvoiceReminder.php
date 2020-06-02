<?php

namespace Fatpanda\BexioConnector\Container\Sales;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InvoiceReminder implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var int
     * @SerializedName("kb_invoice_id")
     * @Type("integer")
     */
    protected $kbInvoiceId;

    /**
     * @var string|null
     * @SerializedName("title")
     * @Type("string")
     */
    protected $title;

    /**
     * @var DateTime
     * @SerializedName("is_valid_from")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $isValidFrom;

    /**
     * @var DateTime
     * @SerializedName("is_valid_to")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $isValidTo;

    /**
     * @var integer
     * @SerializedName("reminder_period_in_days")
     * @Type("integer")
     */
    protected $reminderPeriodInDays;

    /**
     * @var integer
     * @SerializedName("reminder_level")
     * @Type("integer")
     */
    protected $reminderLevel;

    /**
     * @var boolean
     * @SerializedName("show_positions")
     * @Type("boolean")
     */
    protected $showPositions;

    /**
     * @var string
     * @SerializedName("remaining_price")
     * @Type("string")
     */
    protected $remainingPrice;

    /**
     * @var string
     * @SerializedName("received_total")
     * @Type("string")
     */
    protected $receivedTotal;

    /**
     * @var boolean
     * @SerializedName("is_sent")
     * @Type("boolean")
     */
    protected $isSent;

    /**
     * @var string|null
     * @SerializedName("header")
     * @Type("string")
     */
    protected $header;

    /**
     * @var string|null
     * @SerializedName("footer")
     * @Type("string")
     */
    protected $footer;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getKbInvoiceId(): int
    {
        return $this->kbInvoiceId;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return DateTime
     */
    public function getIsValidFrom(): DateTime
    {
        return $this->isValidFrom;
    }

    /**
     * @return DateTime
     */
    public function getIsValidTo(): DateTime
    {
        return $this->isValidTo;
    }

    /**
     * @return int
     */
    public function getReminderPeriodInDays(): int
    {
        return $this->reminderPeriodInDays;
    }

    /**
     * @return int
     */
    public function getReminderLevel(): int
    {
        return $this->reminderLevel;
    }

    /**
     * @return bool
     */
    public function isShowPositions(): bool
    {
        return $this->showPositions;
    }

    /**
     * @return string
     */
    public function getRemainingPrice(): string
    {
        return $this->remainingPrice;
    }

    /**
     * @return string
     */
    public function getReceivedTotal(): string
    {
        return $this->receivedTotal;
    }

    /**
     * @return bool
     */
    public function isSent(): bool
    {
        return $this->isSent;
    }

    /**
     * @return string|null
     */
    public function getHeader(): ?string
    {
        return $this->header;
    }

    /**
     * @return string|null
     */
    public function getFooter(): ?string
    {
        return $this->footer;
    }
}
