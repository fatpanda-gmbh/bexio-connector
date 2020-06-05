<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Quotes;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class QuoteBody extends AbstractBody
{
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
     * @SerializedName("is_valid_until")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $isValidUntil;

    /**
     * @var integer
     * @SerializedName("delivery_address_type")
     * @Type("integer")
     */
    protected $deliveryAddressType;

    /**
     * @var string|null
     * @SerializedName("api_reference")
     * @Type("string")
     */
    protected $apiReference;

    /**
     * @var string|null
     * @SerializedName("viewed_by_client_at")
     * @Type("string")
     */
    protected $viewedByClientAt;

    /**
     * @var integer|null
     * @SerializedName("kb_terms_of_payment_template_id")
     * @Type("integer")
     */
    protected $kbTermsOfPaymentTemplateId;

    /**
     * @var array
     * @SerializedName("positions")
     * @Type("array")
     */
    protected $positions = [];

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return QuoteBody
     */
    public function setTitle(?string $title): QuoteBody
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    /**
     * @param int|null $contactId
     * @return QuoteBody
     */
    public function setContactId(?int $contactId): QuoteBody
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getContactSubId(): ?int
    {
        return $this->contactSubId;
    }

    /**
     * @param int|null $contactSubId
     * @return QuoteBody
     */
    public function setContactSubId(?int $contactSubId): QuoteBody
    {
        $this->contactSubId = $contactSubId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return QuoteBody
     */
    public function setUserId(int $userId): QuoteBody
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPrProjectId(): ?int
    {
        return $this->prProjectId;
    }

    /**
     * @param int|null $prProjectId
     * @return QuoteBody
     */
    public function setPrProjectId(?int $prProjectId): QuoteBody
    {
        $this->prProjectId = $prProjectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLogopaperId(): int
    {
        return $this->logopaperId;
    }

    /**
     * @param int $logopaperId
     * @return QuoteBody
     */
    public function setLogopaperId(int $logopaperId): QuoteBody
    {
        $this->logopaperId = $logopaperId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLanguageId(): int
    {
        return $this->languageId;
    }

    /**
     * @param int $languageId
     * @return QuoteBody
     */
    public function setLanguageId(int $languageId): QuoteBody
    {
        $this->languageId = $languageId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBankAccountId(): int
    {
        return $this->bankAccountId;
    }

    /**
     * @param int $bankAccountId
     * @return QuoteBody
     */
    public function setBankAccountId(int $bankAccountId): QuoteBody
    {
        $this->bankAccountId = $bankAccountId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyId(): int
    {
        return $this->currencyId;
    }

    /**
     * @param int $currencyId
     * @return QuoteBody
     */
    public function setCurrencyId(int $currencyId): QuoteBody
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentTypeId(): int
    {
        return $this->paymentTypeId;
    }

    /**
     * @param int $paymentTypeId
     * @return QuoteBody
     */
    public function setPaymentTypeId(int $paymentTypeId): QuoteBody
    {
        $this->paymentTypeId = $paymentTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @param string $header
     * @return QuoteBody
     */
    public function setHeader(string $header): QuoteBody
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return string
     */
    public function getFooter(): string
    {
        return $this->footer;
    }

    /**
     * @param string $footer
     * @return QuoteBody
     */
    public function setFooter(string $footer): QuoteBody
    {
        $this->footer = $footer;
        return $this;
    }

    /**
     * @return int
     */
    public function getMwstType(): int
    {
        return $this->mwstType;
    }

    /**
     * @param int $mwstType
     * @return QuoteBody
     */
    public function setMwstType(int $mwstType): QuoteBody
    {
        $this->mwstType = $mwstType;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMwstIsNet(): bool
    {
        return $this->mwstIsNet;
    }

    /**
     * @param bool $mwstIsNet
     * @return QuoteBody
     */
    public function setMwstIsNet(bool $mwstIsNet): QuoteBody
    {
        $this->mwstIsNet = $mwstIsNet;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowPositionTaxes(): bool
    {
        return $this->showPositionTaxes;
    }

    /**
     * @param bool $showPositionTaxes
     * @return QuoteBody
     */
    public function setShowPositionTaxes(bool $showPositionTaxes): QuoteBody
    {
        $this->showPositionTaxes = $showPositionTaxes;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getIsValidFrom(): DateTime
    {
        return $this->isValidFrom;
    }

    /**
     * @param DateTime $isValidFrom
     * @return QuoteBody
     */
    public function setIsValidFrom(DateTime $isValidFrom): QuoteBody
    {
        $this->isValidFrom = $isValidFrom;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getIsValidUntil(): DateTime
    {
        return $this->isValidUntil;
    }

    /**
     * @param DateTime $isValidUntil
     * @return QuoteBody
     */
    public function setIsValidUntil(DateTime $isValidUntil): QuoteBody
    {
        $this->isValidUntil = $isValidUntil;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryAddressType(): int
    {
        return $this->deliveryAddressType;
    }

    /**
     * @param int $deliveryAddressType
     * @return QuoteBody
     */
    public function setDeliveryAddressType(int $deliveryAddressType): QuoteBody
    {
        $this->deliveryAddressType = $deliveryAddressType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getApiReference(): ?string
    {
        return $this->apiReference;
    }

    /**
     * @param string|null $apiReference
     * @return QuoteBody
     */
    public function setApiReference(?string $apiReference): QuoteBody
    {
        $this->apiReference = $apiReference;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getViewedByClientAt(): ?string
    {
        return $this->viewedByClientAt;
    }

    /**
     * @param string|null $viewedByClientAt
     * @return QuoteBody
     */
    public function setViewedByClientAt(?string $viewedByClientAt): QuoteBody
    {
        $this->viewedByClientAt = $viewedByClientAt;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getKbTermsOfPaymentTemplateId(): ?int
    {
        return $this->kbTermsOfPaymentTemplateId;
    }

    /**
     * @param int|null $kbTermsOfPaymentTemplateId
     * @return QuoteBody
     */
    public function setKbTermsOfPaymentTemplateId(?int $kbTermsOfPaymentTemplateId): QuoteBody
    {
        $this->kbTermsOfPaymentTemplateId = $kbTermsOfPaymentTemplateId;
        return $this;
    }

    /**
     * @return array
     */
    public function getPositions(): array
    {
        return $this->positions;
    }

    /**
     * @param array $positions
     * @return QuoteBody
     */
    public function setPositions(array $positions): QuoteBody
    {
        $this->positions = $positions;
        return $this;
    }
}