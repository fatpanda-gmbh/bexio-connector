<?php

namespace Fatpanda\BexioConnector\Container\Projects;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Timesheet implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var int
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var int
     * @SerializedName("status_id")
     * @Type("integer")
     */
    protected $statusId;

    /**
     * @var int
     * @SerializedName("client_service_id")
     * @Type("integer")
     */
    protected $clientServiceId;

    /**
     * @var string
     * @SerializedName("text")
     * @Type("string")
     */
    protected $text;

    /**
     * @var string
     * @SerializedName("allowable_bill")
     * @Type("string")
     */
    protected $allowableBill;

    /**
     * @var string|null
     * @SerializedName("charge")
     * @Type("string")
     */
    protected $charge;

    /**
     * @var int|null
     * @SerializedName("contact_id")
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @var int|null
     * @SerializedName("sub_contact_id")
     * @Type("integer")
     */
    protected $subContactId;

    /**
     * @var int|null
     * @SerializedName("pr_project_id")
     * @Type("integer")
     */
    protected $prProjectId;

    /**
     * @var int|null
     * @SerializedName("pr_package_id")
     * @Type("integer")
     */
    protected $prPackageId;

    /**
     * @var int|null
     * @SerializedName("pr_milestone_id")
     * @Type("integer")
     */
    protected $prMilestoneId;

    /**
     * @var string|null
     * @SerializedName("travel_time")
     * @Type("string")
     */
    protected $travelTime;

    /**
     * @var string|null
     * @SerializedName("travel_charge")
     * @Type("string")
     */
    protected $travelCharge;

    /**
     * @var int
     * @SerializedName("travel_distance")
     * @Type("integer")
     */
    protected $travelDistance;

    /**
     * @var string|null
     * @SerializedName("estimated_time")
     * @Type("string")
     */
    protected $estimatedTime;

    /**
     * @var DateTime
     * @SerializedName("date")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $date;

    /**
     * @var string|null
     * @SerializedName("duration")
     * @Type("string")
     */
    protected $duration;

    /**
     * @var bool
     * @SerializedName("running")
     * @Type("bool")
     */
    protected $running;

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
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getStatusId(): int
    {
        return $this->statusId;
    }

    /**
     * @return int
     */
    public function getClientServiceId(): int
    {
        return $this->clientServiceId;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getAllowableBill(): string
    {
        return $this->allowableBill;
    }

    /**
     * @return string|null
     */
    public function getCharge(): ?string
    {
        return $this->charge;
    }

    /**
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    /**
     * @return int|null
     */
    public function getSubContactId(): ?int
    {
        return $this->subContactId;
    }

    /**
     * @return int|null
     */
    public function getPrProjectId(): ?int
    {
        return $this->prProjectId;
    }

    /**
     * @return int|null
     */
    public function getPrPackageId(): ?int
    {
        return $this->prPackageId;
    }

    /**
     * @return int|null
     */
    public function getPrMilestoneId(): ?int
    {
        return $this->prMilestoneId;
    }

    /**
     * @return string|null
     */
    public function getTravelTime(): ?string
    {
        return $this->travelTime;
    }

    /**
     * @return string|null
     */
    public function getTravelCharge(): ?string
    {
        return $this->travelCharge;
    }

    /**
     * @return int
     */
    public function getTravelDistance(): int
    {
        return $this->travelDistance;
    }

    /**
     * @return string|null
     */
    public function getEstimatedTime(): ?string
    {
        return $this->estimatedTime;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * @return bool
     */
    public function isRunning(): bool
    {
        return $this->running;
    }
}
