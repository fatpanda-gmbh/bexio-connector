<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Quotes;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CopyQuoteBody extends AbstractBody
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
     * @return CopyQuoteBody
     */
    public function setContactId(?int $contactId): CopyQuoteBody
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @param int|null $contactSubId
     * @return CopyQuoteBody
     */
    public function setContactSubId(?int $contactSubId): CopyQuoteBody
    {
        $this->contactSubId = $contactSubId;
        return $this;
    }

    /**
     * @param DateTime $isValidFrom
     * @return CopyQuoteBody
     */
    public function setIsValidFrom(DateTime $isValidFrom): CopyQuoteBody
    {
        $this->isValidFrom = $isValidFrom;
        return $this;
    }

    /**
     * @param int|null $prProjectId
     * @return CopyQuoteBody
     */
    public function setPrProjectId(?int $prProjectId): CopyQuoteBody
    {
        $this->prProjectId = $prProjectId;
        return $this;
    }

    /**
     * @param string|null $title
     * @return CopyQuoteBody
     */
    public function setTitle(?string $title): CopyQuoteBody
    {
        $this->title = $title;
        return $this;
    }
}
