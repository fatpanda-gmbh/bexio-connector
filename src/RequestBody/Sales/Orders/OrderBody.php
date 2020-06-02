<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Orders;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class OrderBody extends AbstractBody
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
     * @var array
     * @SerializedName("positions")
     * @Type("array")
     */
    protected $positions = [];

    /**
     * @param string|null $title
     * @return OrderBody
     */
    public function setTitle(?string $title): OrderBody
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param int|null $contactId
     * @return OrderBody
     */
    public function setContactId(?int $contactId): OrderBody
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @param int|null $contactSubId
     * @return OrderBody
     */
    public function setContactSubId(?int $contactSubId): OrderBody
    {
        $this->contactSubId = $contactSubId;
        return $this;
    }

    /**
     * @param int $userId
     * @return OrderBody
     */
    public function setUserId(int $userId): OrderBody
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @param int|null $prProjectId
     * @return OrderBody
     */
    public function setPrProjectId(?int $prProjectId): OrderBody
    {
        $this->prProjectId = $prProjectId;
        return $this;
    }

    /**
     * @param int $logopaperId
     * @return OrderBody
     */
    public function setLogopaperId(int $logopaperId): OrderBody
    {
        $this->logopaperId = $logopaperId;
        return $this;
    }

    /**
     * @param int $languageId
     * @return OrderBody
     */
    public function setLanguageId(int $languageId): OrderBody
    {
        $this->languageId = $languageId;
        return $this;
    }

    /**
     * @param int $bankAccountId
     * @return OrderBody
     */
    public function setBankAccountId(int $bankAccountId): OrderBody
    {
        $this->bankAccountId = $bankAccountId;
        return $this;
    }

    /**
     * @param int $currencyId
     * @return OrderBody
     */
    public function setCurrencyId(int $currencyId): OrderBody
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * @param int $paymentTypeId
     * @return OrderBody
     */
    public function setPaymentTypeId(int $paymentTypeId): OrderBody
    {
        $this->paymentTypeId = $paymentTypeId;
        return $this;
    }

    /**
     * @param string $header
     * @return OrderBody
     */
    public function setHeader(string $header): OrderBody
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @param string $footer
     * @return OrderBody
     */
    public function setFooter(string $footer): OrderBody
    {
        $this->footer = $footer;
        return $this;
    }

    /**
     * @param int $mwstType
     * @return OrderBody
     */
    public function setMwstType(int $mwstType): OrderBody
    {
        $this->mwstType = $mwstType;
        return $this;
    }

    /**
     * @param bool $mwstIsNet
     * @return OrderBody
     */
    public function setMwstIsNet(bool $mwstIsNet): OrderBody
    {
        $this->mwstIsNet = $mwstIsNet;
        return $this;
    }

    /**
     * @param bool $showPositionTaxes
     * @return OrderBody
     */
    public function setShowPositionTaxes(bool $showPositionTaxes): OrderBody
    {
        $this->showPositionTaxes = $showPositionTaxes;
        return $this;
    }

    /**
     * @param DateTime $isValidFrom
     * @return OrderBody
     */
    public function setIsValidFrom(DateTime $isValidFrom): OrderBody
    {
        $this->isValidFrom = $isValidFrom;
        return $this;
    }

    /**
     * @param int $deliveryAddressType
     * @return OrderBody
     */
    public function setDeliveryAddressType(int $deliveryAddressType): OrderBody
    {
        $this->deliveryAddressType = $deliveryAddressType;
        return $this;
    }

    /**
     * @param string|null $apiReference
     * @return OrderBody
     */
    public function setApiReference(?string $apiReference): OrderBody
    {
        $this->apiReference = $apiReference;
        return $this;
    }

    /**
     * @param array $positions
     * @return OrderBody
     */
    public function setPositions(array $positions): OrderBody
    {
        $this->positions = $positions;
        return $this;
    }
}
