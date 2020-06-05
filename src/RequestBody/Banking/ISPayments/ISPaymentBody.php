<?php

namespace Fatpanda\BexioConnector\RequestBody\Banking\ISPayments;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use Fatpanda\BexioConnector\RequestBody\Banking\BankPaymentAmount;
use Fatpanda\BexioConnector\RequestBody\Banking\BankPaymentRecipient;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ISPaymentBody extends AbstractBody
{
    /**
     * @var BankPaymentAmount
     * @SerializedName("instructed_amount")
     * @Type("Fatpanda\BexioConnector\RequestBody\Banking\BankPaymentAmount")
     */
    protected $instructedAmount;

    /**
     * @var BankPaymentRecipient
     * @SerializedName("recipient")
     * @Type("Fatpanda\BexioConnector\RequestBody\Banking\BankPaymentRecipient")
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
     * @param BankPaymentAmount $instructedAmount
     * @return ISPaymentBody
     */
    public function setInstructedAmount(BankPaymentAmount $instructedAmount): ISPaymentBody
    {
        $this->instructedAmount = $instructedAmount;
        return $this;
    }

    /**
     * @param BankPaymentRecipient $recipient
     * @return ISPaymentBody
     */
    public function setRecipient(BankPaymentRecipient $recipient): ISPaymentBody
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @param string $accountNumber
     * @return ISPaymentBody
     */
    public function setAccountNumber(string $accountNumber): ISPaymentBody
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @param DateTime $executionDate
     * @return ISPaymentBody
     */
    public function setExecutionDate(DateTime $executionDate): ISPaymentBody
    {
        $this->executionDate = $executionDate;
        return $this;
    }

    /**
     * @param bool $isSalaryPayment
     * @return ISPaymentBody
     */
    public function setIsSalaryPayment(bool $isSalaryPayment): ISPaymentBody
    {
        $this->isSalaryPayment = $isSalaryPayment;
        return $this;
    }

    /**
     * @param bool $isEditingRestricted
     * @return ISPaymentBody
     */
    public function setIsEditingRestricted(bool $isEditingRestricted): ISPaymentBody
    {
        $this->isEditingRestricted = $isEditingRestricted;
        return $this;
    }

    /**
     * @param string $billId
     * @return ISPaymentBody
     */
    public function setBillId(string $billId): ISPaymentBody
    {
        $this->billId = $billId;
        return $this;
    }

    /**
     * @param string $iban
     * @return ISPaymentBody
     */
    public function setIban(string $iban): ISPaymentBody
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @param string $message
     * @return ISPaymentBody
     */
    public function setMessage(string $message): ISPaymentBody
    {
        $this->message = $message;
        return $this;
    }
}
