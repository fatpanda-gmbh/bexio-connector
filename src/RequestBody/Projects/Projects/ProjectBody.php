<?php

namespace Fatpanda\BexioConnector\RequestBody\Projects\Projects;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ProjectBody extends AbstractBody
{
    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    protected $name;

    /**
     * @var DateTime|null
     * @SerializedName("start_date")
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $startDate;

    /**
     * @var DateTime|null
     * @SerializedName("end_date")
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $endDate;

    /**
     * @var string
     * @SerializedName("comment")
     * @Type("string")
     */
    protected $comment;

    /**
     * @var int
     * @SerializedName("pr_state_id")
     * @Type("integer")
     */
    protected $prStateId;

    /**
     * @var int
     * @SerializedName("pr_project_type_id")
     * @Type("integer")
     */
    protected $prProjectTypeId;

    /**
     * @var int
     * @SerializedName("contact_id")
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @var int|null
     * @SerializedName("contact_sub_id")
     * @Type("integer")
     */
    protected $contactSubId;

    /**
     * @var int|null
     * @SerializedName("pr_invoice_type_id")
     * @Type("integer")
     */
    protected $prInvoiceTypeId;

    /**
     * @var string
     * @SerializedName("pr_invoice_type_amount")
     * @Type("string")
     */
    protected $prInvoiceTypeAmount;

    /**
     * @var int|null
     * @SerializedName("pr_budget_type_id")
     * @Type("integer")
     */
    protected $prBudgetTypeId;
    /**
     * @var string
     * @SerializedName("pr_budget_type_amount")
     * @Type("string")
     */
    protected $prBudgetTypeAmount;

    /**
     * @var int
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @param string $name
     * @return ProjectBody
     */
    public function setName(string $name): ProjectBody
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param DateTime|null $startDate
     * @return ProjectBody
     */
    public function setStartDate(?DateTime $startDate): ProjectBody
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @param DateTime|null $endDate
     * @return ProjectBody
     */
    public function setEndDate(?DateTime $endDate): ProjectBody
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @param string $comment
     * @return ProjectBody
     */
    public function setComment(string $comment): ProjectBody
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @param int $prStateId
     * @return ProjectBody
     */
    public function setPrStateId(int $prStateId): ProjectBody
    {
        $this->prStateId = $prStateId;
        return $this;
    }

    /**
     * @param int $prProjectTypeId
     * @return ProjectBody
     */
    public function setPrProjectTypeId(int $prProjectTypeId): ProjectBody
    {
        $this->prProjectTypeId = $prProjectTypeId;
        return $this;
    }

    /**
     * @param int $contactId
     * @return ProjectBody
     */
    public function setContactId(int $contactId): ProjectBody
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @param int|null $contactSubId
     * @return ProjectBody
     */
    public function setContactSubId(?int $contactSubId): ProjectBody
    {
        $this->contactSubId = $contactSubId;
        return $this;
    }

    /**
     * @param int|null $prInvoiceTypeId
     * @return ProjectBody
     */
    public function setPrInvoiceTypeId(?int $prInvoiceTypeId): ProjectBody
    {
        $this->prInvoiceTypeId = $prInvoiceTypeId;
        return $this;
    }

    /**
     * @param string $prInvoiceTypeAmount
     * @return ProjectBody
     */
    public function setPrInvoiceTypeAmount(string $prInvoiceTypeAmount): ProjectBody
    {
        $this->prInvoiceTypeAmount = $prInvoiceTypeAmount;
        return $this;
    }

    /**
     * @param int|null $prBudgetTypeId
     * @return ProjectBody
     */
    public function setPrBudgetTypeId(?int $prBudgetTypeId): ProjectBody
    {
        $this->prBudgetTypeId = $prBudgetTypeId;
        return $this;
    }

    /**
     * @param string $prBudgetTypeAmount
     * @return ProjectBody
     */
    public function setPrBudgetTypeAmount(string $prBudgetTypeAmount): ProjectBody
    {
        $this->prBudgetTypeAmount = $prBudgetTypeAmount;
        return $this;
    }

    /**
     * @param int $userId
     * @return ProjectBody
     */
    public function setUserId(int $userId): ProjectBody
    {
        $this->userId = $userId;
        return $this;
    }
}
