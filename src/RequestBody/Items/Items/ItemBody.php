<?php

namespace Fatpanda\BexioConnector\RequestBody\Items\Items;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ItemBody extends AbstractBody
{
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
     * @Type("number")
     */
    protected $purchasePrice;

    /**
     * @var float|null
     * @SerializedName("sale_price")
     * @Type("number")
     */
    protected $salePrice;

    /**
     * @var float|null
     * @SerializedName("purchase_total")
     * @Type("number")
     */
    protected $purchaseTotal;

    /**
     * @var float|null
     * @SerializedName("sale_total")
     * @Type("number")
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
     * @Type("number")
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
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return ItemBody
     */
    public function setUserId(int $userId): ItemBody
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int
     */
    public function getArticleTypeId(): int
    {
        return $this->articleTypeId;
    }

    /**
     * @param int $articleTypeId
     * @return ItemBody
     */
    public function setArticleTypeId(int $articleTypeId): ItemBody
    {
        $this->articleTypeId = $articleTypeId;
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
     * @return ItemBody
     */
    public function setContactId(?int $contactId): ItemBody
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelivererCode(): ?string
    {
        return $this->delivererCode;
    }

    /**
     * @param string|null $delivererCode
     * @return ItemBody
     */
    public function setDelivererCode(?string $delivererCode): ItemBody
    {
        $this->delivererCode = $delivererCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelivererName(): ?string
    {
        return $this->delivererName;
    }

    /**
     * @param string|null $delivererName
     * @return ItemBody
     */
    public function setDelivererName(?string $delivererName): ItemBody
    {
        $this->delivererName = $delivererName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelivererDescription(): ?string
    {
        return $this->delivererDescription;
    }

    /**
     * @param string|null $delivererDescription
     * @return ItemBody
     */
    public function setDelivererDescription(?string $delivererDescription): ItemBody
    {
        $this->delivererDescription = $delivererDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternCode(): string
    {
        return $this->internCode;
    }

    /**
     * @param string $internCode
     * @return ItemBody
     */
    public function setInternCode(string $internCode): ItemBody
    {
        $this->internCode = $internCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternName(): string
    {
        return $this->internName;
    }

    /**
     * @param string $internName
     * @return ItemBody
     */
    public function setInternName(string $internName): ItemBody
    {
        $this->internName = $internName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInternDescription(): ?string
    {
        return $this->internDescription;
    }

    /**
     * @param string|null $internDescription
     * @return ItemBody
     */
    public function setInternDescription(?string $internDescription): ItemBody
    {
        $this->internDescription = $internDescription;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPurchasePrice(): ?float
    {
        return $this->purchasePrice;
    }

    /**
     * @param float|null $purchasePrice
     * @return ItemBody
     */
    public function setPurchasePrice(?float $purchasePrice): ItemBody
    {
        $this->purchasePrice = $purchasePrice;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getSalePrice(): ?float
    {
        return $this->salePrice;
    }

    /**
     * @param float|null $salePrice
     * @return ItemBody
     */
    public function setSalePrice(?float $salePrice): ItemBody
    {
        $this->salePrice = $salePrice;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPurchaseTotal(): ?float
    {
        return $this->purchaseTotal;
    }

    /**
     * @param float|null $purchaseTotal
     * @return ItemBody
     */
    public function setPurchaseTotal(?float $purchaseTotal): ItemBody
    {
        $this->purchaseTotal = $purchaseTotal;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getSaleTotal(): ?float
    {
        return $this->saleTotal;
    }

    /**
     * @param float|null $saleTotal
     * @return ItemBody
     */
    public function setSaleTotal(?float $saleTotal): ItemBody
    {
        $this->saleTotal = $saleTotal;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCurrencyId(): ?int
    {
        return $this->currencyId;
    }

    /**
     * @param int|null $currencyId
     * @return ItemBody
     */
    public function setCurrencyId(?int $currencyId): ItemBody
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTaxIncomeId(): ?int
    {
        return $this->taxIncomeId;
    }

    /**
     * @param int|null $taxIncomeId
     * @return ItemBody
     */
    public function setTaxIncomeId(?int $taxIncomeId): ItemBody
    {
        $this->taxIncomeId = $taxIncomeId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTaxId(): ?int
    {
        return $this->taxId;
    }

    /**
     * @param int|null $taxId
     * @return ItemBody
     */
    public function setTaxId(?int $taxId): ItemBody
    {
        $this->taxId = $taxId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTaxExpenseId(): ?int
    {
        return $this->taxExpenseId;
    }

    /**
     * @param int|null $taxExpenseId
     * @return ItemBody
     */
    public function setTaxExpenseId(?int $taxExpenseId): ItemBody
    {
        $this->taxExpenseId = $taxExpenseId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUnitId(): ?int
    {
        return $this->unitId;
    }

    /**
     * @param int|null $unitId
     * @return ItemBody
     */
    public function setUnitId(?int $unitId): ItemBody
    {
        $this->unitId = $unitId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStock(): bool
    {
        return $this->isStock;
    }

    /**
     * @param bool $isStock
     * @return ItemBody
     */
    public function setIsStock(bool $isStock): ItemBody
    {
        $this->isStock = $isStock;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getStockId(): ?int
    {
        return $this->stockId;
    }

    /**
     * @param int|null $stockId
     * @return ItemBody
     */
    public function setStockId(?int $stockId): ItemBody
    {
        $this->stockId = $stockId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getStockPlaceId(): ?int
    {
        return $this->stockPlaceId;
    }

    /**
     * @param int|null $stockPlaceId
     * @return ItemBody
     */
    public function setStockPlaceId(?int $stockPlaceId): ItemBody
    {
        $this->stockPlaceId = $stockPlaceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getStockNr(): int
    {
        return $this->stockNr;
    }

    /**
     * @param int $stockNr
     * @return ItemBody
     */
    public function setStockNr(int $stockNr): ItemBody
    {
        $this->stockNr = $stockNr;
        return $this;
    }

    /**
     * @return int
     */
    public function getStockMinNr(): int
    {
        return $this->stockMinNr;
    }

    /**
     * @param int $stockMinNr
     * @return ItemBody
     */
    public function setStockMinNr(int $stockMinNr): ItemBody
    {
        $this->stockMinNr = $stockMinNr;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int|null $width
     * @return ItemBody
     */
    public function setWidth(?int $width): ItemBody
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int|null $height
     * @return ItemBody
     */
    public function setHeight(?int $height): ItemBody
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @param int|null $weight
     * @return ItemBody
     */
    public function setWeight(?int $weight): ItemBody
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVolume(): ?int
    {
        return $this->volume;
    }

    /**
     * @param int|null $volume
     * @return ItemBody
     */
    public function setVolume(?int $volume): ItemBody
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHtmlText(): ?string
    {
        return $this->htmlText;
    }

    /**
     * @param string|null $htmlText
     * @return ItemBody
     */
    public function setHtmlText(?string $htmlText): ItemBody
    {
        $this->htmlText = $htmlText;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    /**
     * @param string|null $remarks
     * @return ItemBody
     */
    public function setRemarks(?string $remarks): ItemBody
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDeliveryPrice(): ?float
    {
        return $this->deliveryPrice;
    }

    /**
     * @param float|null $deliveryPrice
     * @return ItemBody
     */
    public function setDeliveryPrice(?float $deliveryPrice): ItemBody
    {
        $this->deliveryPrice = $deliveryPrice;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getArticleGroupId(): ?int
    {
        return $this->articleGroupId;
    }

    /**
     * @param int|null $articleGroupId
     * @return ItemBody
     */
    public function setArticleGroupId(?int $articleGroupId): ItemBody
    {
        $this->articleGroupId = $articleGroupId;
        return $this;
    }
}
