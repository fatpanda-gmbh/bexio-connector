<?php

namespace Fatpanda\BexioConnector\RequestBody\Projects\Timesheets;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class TimesheetBody extends AbstractBody
{
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
     * @SerializedName("estimated_time")
     * @Type("string")
     */
    protected $estimatedTime;

    /**
     * @var TimesheetDurationBody|TimesheetRangeBody
     * @SerializedName("tracking")
     */
    protected $tracking;

    /**
     * @param int $userId
     * @return TimesheetBody
     */
    public function setUserId(int $userId): TimesheetBody
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @param int $statusId
     * @return TimesheetBody
     */
    public function setStatusId(int $statusId): TimesheetBody
    {
        $this->statusId = $statusId;
        return $this;
    }

    /**
     * @param int $clientServiceId
     * @return TimesheetBody
     */
    public function setClientServiceId(int $clientServiceId): TimesheetBody
    {
        $this->clientServiceId = $clientServiceId;
        return $this;
    }

    /**
     * @param string $text
     * @return TimesheetBody
     */
    public function setText(string $text): TimesheetBody
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param string $allowableBill
     * @return TimesheetBody
     */
    public function setAllowableBill(string $allowableBill): TimesheetBody
    {
        $this->allowableBill = $allowableBill;
        return $this;
    }

    /**
     * @param string|null $charge
     * @return TimesheetBody
     */
    public function setCharge(?string $charge): TimesheetBody
    {
        $this->charge = $charge;
        return $this;
    }

    /**
     * @param int|null $contactId
     * @return TimesheetBody
     */
    public function setContactId(?int $contactId): TimesheetBody
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @param int|null $subContactId
     * @return TimesheetBody
     */
    public function setSubContactId(?int $subContactId): TimesheetBody
    {
        $this->subContactId = $subContactId;
        return $this;
    }

    /**
     * @param int|null $prProjectId
     * @return TimesheetBody
     */
    public function setPrProjectId(?int $prProjectId): TimesheetBody
    {
        $this->prProjectId = $prProjectId;
        return $this;
    }

    /**
     * @param int|null $prPackageId
     * @return TimesheetBody
     */
    public function setPrPackageId(?int $prPackageId): TimesheetBody
    {
        $this->prPackageId = $prPackageId;
        return $this;
    }

    /**
     * @param int|null $prMilestoneId
     * @return TimesheetBody
     */
    public function setPrMilestoneId(?int $prMilestoneId): TimesheetBody
    {
        $this->prMilestoneId = $prMilestoneId;
        return $this;
    }

    /**
     * @param string|null $estimatedTime
     * @return TimesheetBody
     */
    public function setEstimatedTime(?string $estimatedTime): TimesheetBody
    {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    /**
     * @param TimesheetDurationBody|TimesheetRangeBody $tracking
     * @return TimesheetBody
     */
    public function setTracking($tracking): TimesheetBody
    {
        $this->tracking = $tracking;
        return $this;
    }
}
