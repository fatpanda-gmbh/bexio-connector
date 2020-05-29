<?php

namespace Fatpanda\BexioConnector\Container\Sales;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class DefaultPosition implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("amount")
     * @Type("string")
     */
    protected $amount;

    /**
     * @var integer
     * @SerializedName("unit_id")
     * @Type("integer")
     */
    protected $unitId;

    /**
     * @var integer
     * @SerializedName("account_id")
     * @Type("integer")
     */
    protected $accountId;

    /**
     * @var string
     * @SerializedName("unit_name")
     * @Type("string")
     */
    protected $unitName;

    /**
     * @var integer
     * @SerializedName("tax_id")
     * @Type("integer")
     */
    protected $taxId;

    /**
     * @var string
     * @SerializedName("tax_value")
     * @Type("string")
     */
    protected $taxValue;

    /**
     * @var string
     * @SerializedName("text")
     * @Type("string")
     */
    protected $text;

    /**
     * @var string
     * @SerializedName("unit_price")
     * @Type("string")
     */
    protected $unitPrice;

    /**
     * @var string
     * @SerializedName("discount_in_percent")
     * @Type("string")
     */
    protected $discountInPercent;

    /**
     * @var string
     * @SerializedName("position_total")
     * @Type("string")
     */
    protected $positionTotal;

    /**
     * @var string
     * @SerializedName("pos")
     * @Type("string")
     */
    protected $pos;

    /**
     * @var integer
     * @SerializedName("internal_pos")
     * @Type("integer")
     */
    protected $internalPos;

    /**
     * @var boolean
     * @SerializedName("is_optional")
     * @Type("boolean")
     */
    protected $isOptional;

    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var integer|null
     * @SerializedName("parent_id")
     * @Type("integer")
     */
    protected $parentId;

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
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @return int
     */
    public function getUnitId(): int
    {
        return $this->unitId;
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
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * @return int
     */
    public function getTaxId(): int
    {
        return $this->taxId;
    }

    /**
     * @return string
     */
    public function getTaxValue(): string
    {
        return $this->taxValue;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getUnitPrice(): string
    {
        return $this->unitPrice;
    }

    /**
     * @return string
     */
    public function getDiscountInPercent(): string
    {
        return $this->discountInPercent;
    }

    /**
     * @return string
     */
    public function getPositionTotal(): string
    {
        return $this->positionTotal;
    }

    /**
     * @return string
     */
    public function getPos(): string
    {
        return $this->pos;
    }

    /**
     * @return int
     */
    public function getInternalPos(): int
    {
        return $this->internalPos;
    }

    /**
     * @return bool
     */
    public function isOptional(): bool
    {
        return $this->isOptional;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
}
