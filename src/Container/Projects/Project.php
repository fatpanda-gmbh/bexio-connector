<?php

namespace Fatpanda\BexioConnector\Container\Projects;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Project implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("nr")
     * @Type("string")
     */
    protected $nr;

    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    protected $name;

    /**
     * @var DateTime
     * @SerializedName("start_date")
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $startDate;

    /**
     * @var DateTime
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNr(): string
    {
        return $this->nr;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @return int
     */
    public function getPrStateId(): int
    {
        return $this->prStateId;
    }

    /**
     * @return int
     */
    public function getPrProjectTypeId(): int
    {
        return $this->prProjectTypeId;
    }

    /**
     * @return int
     */
    public function getContactId(): int
    {
        return $this->contactId;
    }

    /**
     * @return int|null
     */
    public function getContactSubId(): ?int
    {
        return $this->contactSubId;
    }

    /**
     * @return int|null
     */
    public function getPrInvoiceTypeId(): ?int
    {
        return $this->prInvoiceTypeId;
    }

    /**
     * @return string
     */
    public function getPrInvoiceTypeAmount(): string
    {
        return $this->prInvoiceTypeAmount;
    }

    /**
     * @return int|null
     */
    public function getPrBudgetTypeId(): ?int
    {
        return $this->prBudgetTypeId;
    }

    /**
     * @return string
     */
    public function getPrBudgetTypeAmount(): string
    {
        return $this->prBudgetTypeAmount;
    }
}
