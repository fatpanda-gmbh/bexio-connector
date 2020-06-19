<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Invoices;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use Fatpanda\BexioConnector\RequestBody\Sales\PositionTrait;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InvoiceBody extends AbstractBody
{
    use PositionTrait;

    public const MWST_TYPE_INCLUDING_TAXES = 0;
    public const MWST_TYPE_EXCLUDING_TAXES = 1;
    public const MWST_TYPE_EXEMPT_FROM_TAXES = 2;

    public const MWST_IS_NET_TAXES_ARE_INCLUDED = false;
    public const MWST_IS_NET_TAXES_WILL_BE_INCLUDED = true;

    /**
     * @var string|null
     * @SerializedName("title")
     * @Type("string")
     */
    protected $title;

    /**
     * @var int|null
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
     * @var int
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var int|null
     * @SerializedName("pr_project_id")
     * @Type("integer")
     */
    protected $prProjectId;

    /**
     * @var int
     * @SerializedName("logopaper_id")
     * @Type("integer")
     */
    protected $logopaperId;

    /**
     * @var int
     * @SerializedName("language_id")
     * @Type("integer")
     */
    protected $languageId;

    /**
     * @var int
     * @SerializedName("bank_account_id")
     * @Type("integer")
     */
    protected $bankAccountId;

    /**
     * @var int
     * @SerializedName("currency_id")
     * @Type("integer")
     */
    protected $currencyId;

    /**
     * @var int
     * @SerializedName("payment_type_id")
     * @Type("integer")
     */
    protected $paymentTypeId;

    /**
     * @var string
     * @SerializedName("header")
     * @Type("string")
     */
    protected $header;

    /**
     * @var string
     * @SerializedName("footer")
     * @Type("string")
     */
    protected $footer;

    /**
     * @var int
     * @SerializedName("mwst_type")
     * @Type("integer")
     */
    protected $mwstType;

    /**
     * @var bool
     * @SerializedName("mwst_is_net")
     * @Type("boolean")
     */
    protected $mwstIsNet;

    /**
     * @var bool
     * @SerializedName("show_position_taxes")
     * @Type("boolean")
     */
    protected $showPositionTaxes;

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
     * @var string|null
     * @SerializedName("reference")
     * @Type("string")
     */
    protected $reference;

    /**
     * @var string|null
     * @SerializedName("api_reference")
     * @Type("string")
     */
    protected $apiReference;

    /**
     * @param string|null $title
     * @return InvoiceBody
     */
    public function setTitle(?string $title): InvoiceBody
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param int|null $contactId
     * @return InvoiceBody
     */
    public function setContactId(?int $contactId): InvoiceBody
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * @param int|null $contactSubId
     * @return InvoiceBody
     */
    public function setContactSubId(?int $contactSubId): InvoiceBody
    {
        $this->contactSubId = $contactSubId;

        return $this;
    }

    /**
     * @param int $userId
     * @return InvoiceBody
     */
    public function setUserId(int $userId): InvoiceBody
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @param int|null $prProjectId
     * @return InvoiceBody
     */
    public function setPrProjectId(?int $prProjectId): InvoiceBody
    {
        $this->prProjectId = $prProjectId;

        return $this;
    }

    /**
     * @param int $logopaperId
     * @return InvoiceBody
     */
    public function setLogopaperId(int $logopaperId): InvoiceBody
    {
        $this->logopaperId = $logopaperId;

        return $this;
    }

    /**
     * @param int $languageId
     * @return InvoiceBody
     */
    public function setLanguageId(int $languageId): InvoiceBody
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * @param int $bankAccountId
     * @return InvoiceBody
     */
    public function setBankAccountId(int $bankAccountId): InvoiceBody
    {
        $this->bankAccountId = $bankAccountId;

        return $this;
    }

    /**
     * @param int $currencyId
     * @return InvoiceBody
     */
    public function setCurrencyId(int $currencyId): InvoiceBody
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * @param int $paymentTypeId
     * @return InvoiceBody
     */
    public function setPaymentTypeId(int $paymentTypeId): InvoiceBody
    {
        $this->paymentTypeId = $paymentTypeId;

        return $this;
    }

    /**
     * @param string $header
     * @return InvoiceBody
     */
    public function setHeader(string $header): InvoiceBody
    {
        $this->header = $header;

        return $this;
    }

    /**
     * @param string $footer
     * @return InvoiceBody
     */
    public function setFooter(string $footer): InvoiceBody
    {
        $this->footer = $footer;

        return $this;
    }

    /**
     * @param int $mwstType
     * @return InvoiceBody
     */
    public function setMwstType(int $mwstType): InvoiceBody
    {
        $this->mwstType = $mwstType;

        return $this;
    }

    /**
     * @param bool $mwstIsNet
     * @return InvoiceBody
     */
    public function setMwstIsNet(bool $mwstIsNet): InvoiceBody
    {
        $this->mwstIsNet = $mwstIsNet;

        return $this;
    }

    /**
     * @param bool $showPositionTaxes
     * @return InvoiceBody
     */
    public function setShowPositionTaxes(bool $showPositionTaxes): InvoiceBody
    {
        $this->showPositionTaxes = $showPositionTaxes;

        return $this;
    }

    /**
     * @param DateTime $isValidFrom
     * @return InvoiceBody
     */
    public function setIsValidFrom(DateTime $isValidFrom): InvoiceBody
    {
        $this->isValidFrom = $isValidFrom;

        return $this;
    }

    /**
     * @param DateTime $isValidTo
     * @return InvoiceBody
     */
    public function setIsValidTo(DateTime $isValidTo): InvoiceBody
    {
        $this->isValidTo = $isValidTo;

        return $this;
    }

    /**
     * @param string|null $reference
     * @return InvoiceBody
     */
    public function setReference(?string $reference): InvoiceBody
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @param string|null $apiReference
     * @return InvoiceBody
     */
    public function setApiReference(?string $apiReference): InvoiceBody
    {
        $this->apiReference = $apiReference;

        return $this;
    }
}
