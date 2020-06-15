<?php

namespace Fatpanda\BexioConnector\RequestBody\Accounting\ManualEntries;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ManualEntryItemBody extends AbstractBody
{
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
     * @var string
     * @SerializedName("description")
     * @Type("string")
     */
    protected $description;

    /**
     * @var float
     * @SerializedName("amount")
     * @Type("number")
     */
    protected $amount;

    /**
     * @var integer
     * @SerializedName("currency_id")
     * @Type("integer")
     */
    protected $currencyId;

    /**
     * @var float
     * @SerializedName("currency_factor")
     * @Type("number")
     */
    protected $currencyFactor;

    /**
     * @param int $debitAccountId
     * @return ManualEntryItemBody
     */
    public function setDebitAccountId(int $debitAccountId): ManualEntryItemBody
    {
        $this->debitAccountId = $debitAccountId;
        return $this;
    }

    /**
     * @param int $creditAccountId
     * @return ManualEntryItemBody
     */
    public function setCreditAccountId(int $creditAccountId): ManualEntryItemBody
    {
        $this->creditAccountId = $creditAccountId;
        return $this;
    }

    /**
     * @param int $taxId
     * @return ManualEntryItemBody
     */
    public function setTaxId(int $taxId): ManualEntryItemBody
    {
        $this->taxId = $taxId;
        return $this;
    }

    /**
     * @param int $taxAccountId
     * @return ManualEntryItemBody
     */
    public function setTaxAccountId(int $taxAccountId): ManualEntryItemBody
    {
        $this->taxAccountId = $taxAccountId;
        return $this;
    }

    /**
     * @param string $description
     * @return ManualEntryItemBody
     */
    public function setDescription(string $description): ManualEntryItemBody
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param float $amount
     * @return ManualEntryItemBody
     */
    public function setAmount(float $amount): ManualEntryItemBody
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param int $currencyId
     * @return ManualEntryItemBody
     */
    public function setCurrencyId(int $currencyId): ManualEntryItemBody
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * @param float $currencyFactor
     * @return ManualEntryItemBody
     */
    public function setCurrencyFactor(float $currencyFactor): ManualEntryItemBody
    {
        $this->currencyFactor = $currencyFactor;
        return $this;
    }
}
