<?php

namespace Fatpanda\BexioConnector\Container\Accounting;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Tax implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("uuid")
     * @Type("string")
     */
    protected $uuid;

    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    protected $name;

    /**
     * @var string
     * @SerializedName("code")
     * @Type("string")
     */
    protected $code;

    /**
     * @var string
     * @SerializedName("digit")
     * @Type("string")
     */
    protected $digit;

    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var int
     * @SerializedName("account_id")
     * @Type("integer")
     */
    protected $accountId;

    /**
     * @var string
     * @SerializedName("tax_settlement_type")
     * @Type("string")
     */
    protected $taxSettlementType;

    /**
     * @var float
     * @SerializedName("value")
     * @Type("float")
     */
    protected $value;

    /**
     * @var float|null
     * @SerializedName("net_tax_value")
     * @Type("float")
     */
    protected $netTaxValue;

    /**
     * @var int|null
     * @SerializedName("start_year")
     * @Type("integer")
     */
    protected $startYear;

    /**
     * @var int|null
     * @SerializedName("end_year")
     * @Type("integer")
     */
    protected $endYear;

    /**
     * @var boolean
     * @SerializedName("is_active")
     * @Type("boolean")
     */
    protected $isActive;

    /**
     * @var string
     * @SerializedName("display_name")
     * @Type("string")
     */
    protected $displayName;

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
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getDigit(): string
    {
        return $this->digit;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }

    /**
     * @return string
     */
    public function getTaxSettlementType(): string
    {
        return $this->taxSettlementType;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @return float|null
     */
    public function getNetTaxValue(): ?float
    {
        return $this->netTaxValue;
    }

    /**
     * @return int|null
     */
    public function getStartYear(): ?int
    {
        return $this->startYear;
    }

    /**
     * @return int|null
     */
    public function getEndYear(): ?int
    {
        return $this->endYear;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }
}
