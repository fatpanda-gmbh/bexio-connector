<?php

namespace Fatpanda\BexioConnector\RequestBody\Banking\ISRPayments;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use Fatpanda\BexioConnector\RequestBody\Banking\BankPaymentAmount;
use Fatpanda\BexioConnector\RequestBody\Banking\BankPaymentRecipient;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ISRPaymentBody extends AbstractBody
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
     * @param BankPaymentAmount $instructedAmount
     * @return ISRPaymentBody
     */
    public function setInstructedAmount(BankPaymentAmount $instructedAmount): ISRPaymentBody
    {
        $this->instructedAmount = $instructedAmount;
        return $this;
    }

    /**
     * @param BankPaymentRecipient $recipient
     * @return ISRPaymentBody
     */
    public function setRecipient(BankPaymentRecipient $recipient): ISRPaymentBody
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @param string $accountNumber
     * @return ISRPaymentBody
     */
    public function setAccountNumber(string $accountNumber): ISRPaymentBody
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @param string $isrReferenceNr
     * @return ISRPaymentBody
     */
    public function setIsrReferenceNr(string $isrReferenceNr): ISRPaymentBody
    {
        $this->isrReferenceNr = $isrReferenceNr;
        return $this;
    }

    /**
     * @param bool $isEditingRestricted
     * @return ISRPaymentBody
     */
    public function setIsEditingRestricted(bool $isEditingRestricted): ISRPaymentBody
    {
        $this->isEditingRestricted = $isEditingRestricted;
        return $this;
    }

    /**
     * @param string $billId
     * @return ISRPaymentBody
     */
    public function setBillId(string $billId): ISRPaymentBody
    {
        $this->billId = $billId;
        return $this;
    }

    /**
     * @param DateTime $executionDate
     * @return ISRPaymentBody
     */
    public function setExecutionDate(DateTime $executionDate): ISRPaymentBody
    {
        $this->executionDate = $executionDate;
        return $this;
    }
}
