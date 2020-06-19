<?php

namespace Fatpanda\BexioConnector\Container\Items;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Item implements ContainerInterface
{
    /**
     * @var integer
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var integer
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var integer
     * @SerializedName("article_type_id")
     * @Type("integer")
     */
    protected $articleTypeId;

    /**
     * @var integer|null
     * @SerializedName("contact_id")
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @var string|null
     * @SerializedName("deliverer_code")
     * @Type("string")
     */
    protected $delivererCode;

    /**
     * @var string|null
     * @SerializedName("deliverer_name")
     * @Type("string")
     */
    protected $delivererName;

    /**
     * @var string|null
     * @SerializedName("deliverer_description")
     * @Type("string")
     */
    protected $delivererDescription;

    /**
     * @var string
     * @SerializedName("intern_code")
     * @Type("string")
     */
    protected $internCode;

    /**
     * @var string
     * @SerializedName("intern_name")
     * @Type("string")
     */
    protected $internName;

    /**
     * @var string|null
     * @SerializedName("intern_description")
     * @Type("string")
     */
    protected $internDescription;

    /**
     * @var float|null
     * @SerializedName("purchase_price")
     * @Type("float")
     */
    protected $purchasePrice;

    /**
     * @var float|null
     * @SerializedName("sale_price")
     * @Type("float")
     */
    protected $salePrice;

    /**
     * @var float|null
     * @SerializedName("purchase_total")
     * @Type("float")
     */
    protected $purchaseTotal;

    /**
     * @var float|null
     * @SerializedName("sale_total")
     * @Type("float")
     */
    protected $saleTotal;

    /**
     * @var integer|null
     * @SerializedName("currency_id")
     * @Type("integer")
     */
    protected $currencyId;

    /**
     * @var integer|null
     * @SerializedName("tax_income_id")
     * @Type("integer")
     */
    protected $taxIncomeId;

    /**
     * @var integer|null
     * @SerializedName("tax_id")
     * @Type("integer")
     */
    protected $taxId;

    /**
     * @var integer|null
     * @SerializedName("tax_expense_id")
     * @Type("integer")
     */
    protected $taxExpenseId;

    /**
     * @var integer|null
     * @SerializedName("unit_id")
     * @Type("integer")
     */
    protected $unitId;

    /**
     * @var boolean
     * @SerializedName("is_stock")
     * @Type("boolean")
     */
    protected $isStock;

    /**
     * @var integer|null
     * @SerializedName("stock_id")
     * @Type("integer")
     */
    protected $stockId;

    /**
     * @var integer|null
     * @SerializedName("stock_place_id")
     * @Type("integer")
     */
    protected $stockPlaceId;

    /**
     * @var integer
     * @SerializedName("stock_nr")
     * @Type("integer")
     */
    protected $stockNr;

    /**
     * @var integer
     * @SerializedName("stock_min_nr")
     * @Type("integer")
     */
    protected $stockMinNr;

    /**
     * @var integer
     * @SerializedName("stock_reserved_nr")
     * @Type("integer")
     */
    protected $stockReservedNr;

    /**
     * @var integer
     * @SerializedName("stock_available_nr")
     * @Type("integer")
     */
    protected $stockAvailableNr;

    /**
     * @var integer
     * @SerializedName("stock_picked_nr")
     * @Type("integer")
     */
    protected $stockPickedNr;

    /**
     * @var integer
     * @SerializedName("stock_disposed_nr")
     * @Type("integer")
     */
    protected $stockDisposedNr;

    /**
     * @var integer
     * @SerializedName("stock_ordered_nr")
     * @Type("integer")
     */
    protected $stockOrderedNr;

    /**
     * @var integer|null
     * @SerializedName("width")
     * @Type("integer")
     */
    protected $width;

    /**
     * @var integer|null
     * @SerializedName("height")
     * @Type("integer")
     */
    protected $height;

    /**
     * @var integer|null
     * @SerializedName("weight")
     * @Type("integer")
     */
    protected $weight;

    /**
     * @var integer|null
     * @SerializedName("volume")
     * @Type("integer")
     */
    protected $volume;

    /**
     * @var string|null
     * @SerializedName("html_text")
     * @Type("string")
     */
    protected $htmlText;

    /**
     * @var string|null
     * @SerializedName("remarks")
     * @Type("string")
     */
    protected $remarks;

    /**
     * @var float|null
     * @SerializedName("delivery_price")
     * @Type("float")
     */
    protected $deliveryPrice;

    /**
     * @var integer|null
     * @SerializedName("article_group_id")
     * @Type("integer")
     */
    protected $articleGroupId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getArticleTypeId(): int
    {
        return $this->articleTypeId;
    }

    /**
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    /**
     * @return string|null
     */
    public function getDelivererCode(): ?string
    {
        return $this->delivererCode;
    }

    /**
     * @return string|null
     */
    public function getDelivererName(): ?string
    {
        return $this->delivererName;
    }

    /**
     * @return string|null
     */
    public function getDelivererDescription(): ?string
    {
        return $this->delivererDescription;
    }

    /**
     * @return string
     */
    public function getInternCode(): string
    {
        return $this->internCode;
    }

    /**
     * @return string
     */
    public function getInternName(): string
    {
        return $this->internName;
    }

    /**
     * @return string|null
     */
    public function getInternDescription(): ?string
    {
        return $this->internDescription;
    }

    /**
     * @return float|null
     */
    public function getPurchasePrice(): ?float
    {
        return $this->purchasePrice;
    }

    /**
     * @return float|null
     */
    public function getSalePrice(): ?float
    {
        return $this->salePrice;
    }

    /**
     * @return float|null
     */
    public function getPurchaseTotal(): ?float
    {
        return $this->purchaseTotal;
    }

    /**
     * @return float|null
     */
    public function getSaleTotal(): ?float
    {
        return $this->saleTotal;
    }

    /**
     * @return int|null
     */
    public function getCurrencyId(): ?int
    {
        return $this->currencyId;
    }

    /**
     * @return int|null
     */
    public function getTaxIncomeId(): ?int
    {
        return $this->taxIncomeId;
    }

    /**
     * @return int|null
     */
    public function getTaxId(): ?int
    {
        return $this->taxId;
    }

    /**
     * @return int|null
     */
    public function getTaxExpenseId(): ?int
    {
        return $this->taxExpenseId;
    }

    /**
     * @return int|null
     */
    public function getUnitId(): ?int
    {
        return $this->unitId;
    }

    /**
     * @return bool
     */
    public function isStock(): bool
    {
        return $this->isStock;
    }

    /**
     * @return int|null
     */
    public function getStockId(): ?int
    {
        return $this->stockId;
    }

    /**
     * @return int|null
     */
    public function getStockPlaceId(): ?int
    {
        return $this->stockPlaceId;
    }

    /**
     * @return int
     */
    public function getStockNr(): int
    {
        return $this->stockNr;
    }

    /**
     * @return int
     */
    public function getStockMinNr(): int
    {
        return $this->stockMinNr;
    }

    /**
     * @return int
     */
    public function getStockReservedNr(): int
    {
        return $this->stockReservedNr;
    }

    /**
     * @return int
     */
    public function getStockAvailableNr(): int
    {
        return $this->stockAvailableNr;
    }

    /**
     * @return int
     */
    public function getStockPickedNr(): int
    {
        return $this->stockPickedNr;
    }

    /**
     * @return int
     */
    public function getStockDisposedNr(): int
    {
        return $this->stockDisposedNr;
    }

    /**
     * @return int
     */
    public function getStockOrderedNr(): int
    {
        return $this->stockOrderedNr;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @return int|null
     */
    public function getVolume(): ?int
    {
        return $this->volume;
    }

    /**
     * @return string|null
     */
    public function getHtmlText(): ?string
    {
        return $this->htmlText;
    }

    /**
     * @return string|null
     */
    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    /**
     * @return float|null
     */
    public function getDeliveryPrice(): ?float
    {
        return $this->deliveryPrice;
    }

    /**
     * @return int|null
     */
    public function getArticleGroupId(): ?int
    {
        return $this->articleGroupId;
    }
}
