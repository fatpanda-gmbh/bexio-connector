<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Invoices;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CopyInvoiceBody extends AbstractBody
{
    /**
     * @var integer|null
     * @SerializedName("contact_id")
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @var integer|null
     * @SerializedName("contact_sub_id")
     * @Type("integer")
     */
    protected $contactSubId;

    /**
     * @var DateTime
     * @SerializedName("is_valid_from")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $isValidFrom;

    /**
     * @var integer|null
     * @SerializedName("pr_project_id")
     * @Type("integer")
     */
    protected $prProjectId;

    /**
     * @var string|null
     * @SerializedName("title")
     * @Type("string")
     */
    protected $title;

    /**
     * @param int|null $contactId
     * @return CopyInvoiceBody
     */
    public function setContactId(?int $contactId): CopyInvoiceBody
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @param int|null $contactSubId
     * @return CopyInvoiceBody
     */
    public function setContactSubId(?int $contactSubId): CopyInvoiceBody
    {
        $this->contactSubId = $contactSubId;
        return $this;
    }

    /**
     * @param DateTime $isValidFrom
     * @return CopyInvoiceBody
     */
    public function setIsValidFrom(DateTime $isValidFrom): CopyInvoiceBody
    {
        $this->isValidFrom = $isValidFrom;
        return $this;
    }

    /**
     * @param int|null $prProjectId
     * @return CopyInvoiceBody
     */
    public function setPrProjectId(?int $prProjectId): CopyInvoiceBody
    {
        $this->prProjectId = $prProjectId;
        return $this;
    }

    /**
     * @param string|null $title
     * @return CopyInvoiceBody
     */
    public function setTitle(?string $title): CopyInvoiceBody
    {
        $this->title = $title;
        return $this;
    }
}
