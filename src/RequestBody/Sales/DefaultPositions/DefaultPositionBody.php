<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\DefaultPositions;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class DefaultPositionBody extends AbstractBody
{

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
     * @var integer
     * @SerializedName("tax_id")
     * @Type("integer")
     */
    protected $taxId;

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
     * @param string $amount
     * @return DefaultPositionBody
     */
    public function setAmount(string $amount): DefaultPositionBody
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param int $unitId
     * @return DefaultPositionBody
     */
    public function setUnitId(int $unitId): DefaultPositionBody
    {
        $this->unitId = $unitId;
        return $this;
    }

    /**
     * @param int $accountId
     * @return DefaultPositionBody
     */
    public function setAccountId(int $accountId): DefaultPositionBody
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @param int $taxId
     * @return DefaultPositionBody
     */
    public function setTaxId(int $taxId): DefaultPositionBody
    {
        $this->taxId = $taxId;
        return $this;
    }

    /**
     * @param string $text
     * @return DefaultPositionBody
     */
    public function setText(string $text): DefaultPositionBody
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param string $unitPrice
     * @return DefaultPositionBody
     */
    public function setUnitPrice(string $unitPrice): DefaultPositionBody
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @param string $discountInPercent
     * @return DefaultPositionBody
     */
    public function setDiscountInPercent(string $discountInPercent): DefaultPositionBody
    {
        $this->discountInPercent = $discountInPercent;
        return $this;
    }
}
