<?php

namespace Fatpanda\BexioConnector\Container\Sales;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Invoice implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("document_nr")
     * @Type("string")
     */
    protected $documentNr;

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
     * @SerializedName("project_id")
     * @Type("integer")
     */
    protected $projectId;

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
     * @var string
     * @SerializedName("total_gross")
     * @Type("string")
     */
    protected $totalGross;

    /**
     * @var string
     * @SerializedName("total_net")
     * @Type("string")
     */
    protected $totalNet;

    /**
     * @var string
     * @SerializedName("total_taxes")
     * @Type("string")
     */
    protected $totalTaxes;

    /**
     * @var string
     * @SerializedName("total_received_payments")
     * @Type("string")
     */
    protected $totalReceivedPayments;

    /**
     * @var string
     * @SerializedName("total_credit_vouchers")
     * @Type("string")
     */
    protected $totalCreditVouchers;

    /**
     * @var string
     * @SerializedName("total_remaining_payments")
     * @Type("string")
     */
    protected $totalRemainingPayments;

    /**
     * @var string
     * @SerializedName("total")
     * @Type("string")
     */
    protected $total;

    /**
     * @var double
     * @SerializedName("total_rounding_difference")
     * @Type("double")
     */
    protected $totalRoundingDifference;

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
     * @var string
     * @SerializedName("contact_address")
     * @Type("string")
     */
    protected $contactAddress;

    /**
     * @var int
     * @SerializedName("kb_item_status_id")
     * @Type("integer")
     */
    protected $kbItemStatusId;

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
     * @var string|null
     * @SerializedName("viewed_by_client_at")
     * @Type("string")
     */
    protected $viewedByClientAt;

    /**
     * @var DateTime
     * @SerializedName("updated_at")
     * @Type("DateTime<'Y-m-d H:m:i'>")
     */
    protected $updatedAt;

    /**
     * @var int
     * @SerializedName("esr_id")
     * @Type("integer")
     */
    protected $esrId;

    /**
     * @var string|null
     * @SerializedName("template_slug")
     * @Type("string")
     */
    protected $templateSlug;

    /**
     * @var array
     * @SerializedName("taxs")
     * @Type("array")
     */
    protected $taxs;

    /**
     * @var string|null
     * @SerializedName("network_link")
     * @Type("string")
     */
    protected $networkLink;

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
    public function getDocumentNr(): string
    {
        return $this->documentNr;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
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
    public function getContactSubId(): ?int
    {
        return $this->contactSubId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @return int
     */
    public function getLogopaperId(): int
    {
        return $this->logopaperId;
    }

    /**
     * @return int
     */
    public function getLanguageId(): int
    {
        return $this->languageId;
    }

    /**
     * @return int
     */
    public function getBankAccountId(): int
    {
        return $this->bankAccountId;
    }

    /**
     * @return int
     */
    public function getCurrencyId(): int
    {
        return $this->currencyId;
    }

    /**
     * @return int
     */
    public function getPaymentTypeId(): int
    {
        return $this->paymentTypeId;
    }

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @return string
     */
    public function getFooter(): string
    {
        return $this->footer;
    }

    /**
     * @return string
     */
    public function getTotalGross(): string
    {
        return $this->totalGross;
    }

    /**
     * @return string
     */
    public function getTotalNet(): string
    {
        return $this->totalNet;
    }

    /**
     * @return string
     */
    public function getTotalTaxes(): string
    {
        return $this->totalTaxes;
    }

    /**
     * @return string
     */
    public function getTotalReceivedPayments(): string
    {
        return $this->totalReceivedPayments;
    }

    /**
     * @return string
     */
    public function getTotalCreditVouchers(): string
    {
        return $this->totalCreditVouchers;
    }

    /**
     * @return string
     */
    public function getTotalRemainingPayments(): string
    {
        return $this->totalRemainingPayments;
    }

    /**
     * @return string
     */
    public function getTotal(): string
    {
        return $this->total;
    }

    /**
     * @return float
     */
    public function getTotalRoundingDifference(): float
    {
        return $this->totalRoundingDifference;
    }

    /**
     * @return int
     */
    public function getMwstType(): int
    {
        return $this->mwstType;
    }

    /**
     * @return bool
     */
    public function isMwstIsNet(): bool
    {
        return $this->mwstIsNet;
    }

    /**
     * @return bool
     */
    public function isShowPositionTaxes(): bool
    {
        return $this->showPositionTaxes;
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
     * @return string
     */
    public function getContactAddress(): string
    {
        return $this->contactAddress;
    }

    /**
     * @return int
     */
    public function getKbItemStatusId(): int
    {
        return $this->kbItemStatusId;
    }

    /**
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @return string|null
     */
    public function getApiReference(): ?string
    {
        return $this->apiReference;
    }

    /**
     * @return string|null
     */
    public function getViewedByClientAt(): ?string
    {
        return $this->viewedByClientAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @return int
     */
    public function getEsrId(): int
    {
        return $this->esrId;
    }

    /**
     * @return string|null
     */
    public function getTemplateSlug(): ?string
    {
        return $this->templateSlug;
    }

    /**
     * @return array
     */
    public function getTaxs(): array
    {
        return $this->taxs;
    }

    /**
     * @return string|null
     */
    public function getNetworkLink(): ?string
    {
        return $this->networkLink;
    }
}
