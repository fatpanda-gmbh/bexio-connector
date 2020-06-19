<?php

namespace Fatpanda\BexioConnector\Container\Banking;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

abstract class AbstractBankPayment implements ContainerInterface
{
    /**
     * @var integer
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var float
     * @SerializedName("uuid")
     * @Type("float")
     */
    protected $uuid;

    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var BankPaymentBankAccount
     * @SerializedName("bank_account")
     * @Type("BankPaymentBankAccount")
     */
    protected $bankAccount;

    /**
     * @var PaymentInterface
     * @SerializedName("payment")
     * @Type("PaymentInterface")
     */
    protected $payment;

    /**
     * @var string
     * @SerializedName("instruction_id")
     * @Type("string")
     */
    protected $instructionId;

    /**
     * @var string
     * @SerializedName("status")
     * @Type("string")
     */
    protected $status;

    /**
     * @var DateTime
     * @SerializedName("created_at")
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    protected $createdAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getUuid(): float
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return BankPaymentBankAccount
     */
    public function getBankAccount(): BankPaymentBankAccount
    {
        return $this->bankAccount;
    }

    abstract public function getPayment();

    /**
     * @return string
     */
    public function getInstructionId(): string
    {
        return $this->instructionId;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
