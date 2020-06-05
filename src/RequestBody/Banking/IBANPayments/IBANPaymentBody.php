<?php

namespace Fatpanda\BexioConnector\RequestBody\Banking\IBANPayments;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use Fatpanda\BexioConnector\RequestBody\Banking\BankPaymentAmount;
use Fatpanda\BexioConnector\RequestBody\Banking\BankPaymentRecipient;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class IBANPaymentBody extends AbstractBody
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
     * @SerializedName("iban")
     * @Type("string")
     */
    protected $iban;

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
     * @SerializedName("message")
     * @Type("string")
     */
    protected $message;

    /**
     * @var string
     * @SerializedName("allowance_type")
     * @Type("string")
     */
    protected $allowanceType;

    /**
     * @param BankPaymentAmount $instructedAmount
     * @return IBANPaymentBody
     */
    public function setInstructedAmount(BankPaymentAmount $instructedAmount): IBANPaymentBody
    {
        $this->instructedAmount = $instructedAmount;
        return $this;
    }

    /**
     * @param BankPaymentRecipient $recipient
     * @return IBANPaymentBody
     */
    public function setRecipient(BankPaymentRecipient $recipient): IBANPaymentBody
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @param string $iban
     * @return IBANPaymentBody
     */
    public function setIban(string $iban): IBANPaymentBody
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @param DateTime $executionDate
     * @return IBANPaymentBody
     */
    public function setExecutionDate(DateTime $executionDate): IBANPaymentBody
    {
        $this->executionDate = $executionDate;
        return $this;
    }

    /**
     * @param bool $isSalaryPayment
     * @return IBANPaymentBody
     */
    public function setIsSalaryPayment(bool $isSalaryPayment): IBANPaymentBody
    {
        $this->isSalaryPayment = $isSalaryPayment;
        return $this;
    }

    /**
     * @param bool $isEditingRestricted
     * @return IBANPaymentBody
     */
    public function setIsEditingRestricted(bool $isEditingRestricted): IBANPaymentBody
    {
        $this->isEditingRestricted = $isEditingRestricted;
        return $this;
    }

    /**
     * @param string $billId
     * @return IBANPaymentBody
     */
    public function setBillId(string $billId): IBANPaymentBody
    {
        $this->billId = $billId;
        return $this;
    }

    /**
     * @param string $message
     * @return IBANPaymentBody
     */
    public function setMessage(string $message): IBANPaymentBody
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param string $allowanceType
     * @return IBANPaymentBody
     */
    public function setAllowanceType(string $allowanceType): IBANPaymentBody
    {
        $this->allowanceType = $allowanceType;
        return $this;
    }
}
