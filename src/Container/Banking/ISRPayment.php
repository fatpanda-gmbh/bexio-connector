<?php

namespace Fatpanda\BexioConnector\Container\Banking;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ISRPayment implements ContainerInterface, PaymentInterface
{
    /**
     * @var BankPaymentAmount
     * @SerializedName("instructed_amount")
     * @Type("BankPaymentAmount")
     */
    protected $instructedAmount;

    /**
     * @var BankPaymentRecipient
     * @SerializedName("recipient")
     * @Type("BankPaymentRecipient")
     */
    protected $recipient;

    /**
     * @var string
     * @SerializedName("account_number")
     * @Type("string")
     */
    protected $accountNumber;

    /**
     * @var string
     * @SerializedName("isr_reference_nr")
     * @Type("string")
     */
    protected $isrReferenceNr;

    /**
     * @var boolean
     * @SerializedName("is_editing_restricted")
     * @Type("boolean")
     */
    protected $isEditingRestricted;

    /**
     * @var string
     * @SerializedName("bill_id")
     * @Type("string")
     */
    protected $billId;

    /**
     * @var DateTime
     * @SerializedName("execution_date")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $executionDate;

    /**
     * @return BankPaymentAmount
     */
    public function getInstructedAmount(): BankPaymentAmount
    {
        return $this->instructedAmount;
    }

    /**
     * @return BankPaymentRecipient
     */
    public function getRecipient(): BankPaymentRecipient
    {
        return $this->recipient;
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @return string
     */
    public function getIsrReferenceNr(): string
    {
        return $this->isrReferenceNr;
    }

    /**
     * @return bool
     */
    public function isEditingRestricted(): bool
    {
        return $this->isEditingRestricted;
    }

    /**
     * @return string
     */
    public function getBillId(): string
    {
        return $this->billId;
    }

    /**
     * @return DateTime
     */
    public function getExecutionDate(): DateTime
    {
        return $this->executionDate;
    }
}
