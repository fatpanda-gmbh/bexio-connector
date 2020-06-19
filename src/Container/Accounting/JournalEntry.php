<?php

namespace Fatpanda\BexioConnector\Container\Accounting;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class JournalEntry implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var integer
     * @SerializedName("ref_id")
     * @Type("integer")
     */
    protected $refId;

    /**
     * @var string
     * @SerializedName("ref_class")
     * @Type("string")
     */
    protected $refClass;

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
     * @var string
     * @SerializedName("description")
     * @Type("string")
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getRefId(): int
    {
        return $this->refId;
    }

    /**
     * @return string
     */
    public function getRefClass(): string
    {
        return $this->refClass;
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
     * @return string
     */
    public function getDescription(): string
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
}
