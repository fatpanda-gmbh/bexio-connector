<?php

namespace Fatpanda\BexioConnector\Container\Banking;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ISPayment implements ContainerInterface, PaymentInterface
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
     * @var DateTime
     * @SerializedName("execution_date")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $executionDate;

    /**
     * @var boolean
     * @SerializedName("is_salary_payment")
     * @Type("boolean")
     */
    protected $isSalaryPayment;

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
     * @var string
     * @SerializedName("iban")
     * @Type("string")
     */
    protected $iban;

    /**
     * @var string
     * @SerializedName("message")
     * @Type("string")
     */
    protected $message;

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
     * @return DateTime
     */
    public function getExecutionDate(): DateTime
    {
        return $this->executionDate;
    }

    /**
     * @return bool
     */
    public function isSalaryPayment(): bool
    {
        return $this->isSalaryPayment;
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
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
