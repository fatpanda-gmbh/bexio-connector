<?php

namespace Fatpanda\BexioConnector\Container\Accounting;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ManualEntryItem implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var DateTime
     * @SerializedName("date")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $date;

    /**
     * @var integer
     * @SerializedName("debit_account_id")
     * @Type("integer")
     */
    protected $debitAccountId;

    /**
     * @var integer
     * @SerializedName("credit_account_id")
     * @Type("integer")
     */
    protected $creditAccountId;

    /**
     * @var integer
     * @SerializedName("tax_id")
     * @Type("integer")
     */
    protected $taxId;

    /**
     * @var integer
     * @SerializedName("tax_account_id")
     * @Type("integer")
     */
    protected $taxAccountId;

    /**
     * @var integer
     * @SerializedName("description")
     * @Type("integer")
     */
    protected $description;

    /**
     * @var float
     * @SerializedName("amount")
     * @Type("float")
     */
    protected $amount;

    /**
     * @var integer
     * @SerializedName("currency_id")
     * @Type("integer")
     */
    protected $currencyId;

    /**
     * @var integer
     * @SerializedName("base_currency_id")
     * @Type("integer")
     */
    protected $baseCurrencyId;

    /**
     * @var float
     * @SerializedName("currency_factor")
     * @Type("float")
     */
    protected $currencyFactor;

    /**
     * @var float
     * @SerializedName("base_currency_amount")
     * @Type("float")
     */
    protected $baseCurrencyAmount;

    /**
     * @var integer
     * @SerializedName("created_by_user_id")
     * @Type("integer")
     */
    protected $createdByUserId;

    /**
     * @var integer
     * @SerializedName("edited_by_user_id")
     * @Type("integer")
     */
    protected $editedByUserId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @return int
     */
    public function getDebitAccountId(): int
    {
        return $this->debitAccountId;
    }

    /**
     * @return int
     */
    public function getCreditAccountId(): int
    {
        return $this->creditAccountId;
    }

    /**
     * @return int
     */
    public function getTaxId(): int
    {
        return $this->taxId;
    }

    /**
     * @return int
     */
    public function getTaxAccountId(): int
    {
        return $this->taxAccountId;
    }

    /**
     * @return int
     */
    public function getDescription(): int
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
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
    public function getBaseCurrencyId(): int
    {
        return $this->baseCurrencyId;
    }

    /**
     * @return float
     */
    public function getCurrencyFactor(): float
    {
        return $this->currencyFactor;
    }

    /**
     * @return float
     */
    public function getBaseCurrencyAmount(): float
    {
        return $this->baseCurrencyAmount;
    }

    /**
     * @return int
     */
    public function getCreatedByUserId(): int
    {
        return $this->createdByUserId;
    }

    /**
     * @return int
     */
    public function getEditedByUserId(): int
    {
        return $this->editedByUserId;
    }
}
