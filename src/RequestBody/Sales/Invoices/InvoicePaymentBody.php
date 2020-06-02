<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Invoices;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InvoicePaymentBody extends AbstractBody
{
    /**
     * @var DateTime
     * @SerializedName("date")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $date;

    /**
     * @var string
     * @SerializedName("value")
     * @Type("string")
     */
    protected $value;

    /**
     * @var integer|null
     * @SerializedName("bank_account_id")
     * @Type("integer")
     */
    protected $bankAccountId;

    /**
     * @var integer|null
     * @SerializedName("payment_service_id")
     * @Type("integer")
     */
    protected $paymentServiceId;

    /**
     * @param DateTime $date
     * @return InvoicePaymentBody
     */
    public function setDate(DateTime $date): InvoicePaymentBody
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param string $value
     * @return InvoicePaymentBody
     */
    public function setValue(string $value): InvoicePaymentBody
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @param int|null $bankAccountId
     * @return InvoicePaymentBody
     */
    public function setBankAccountId(?int $bankAccountId): InvoicePaymentBody
    {
        $this->bankAccountId = $bankAccountId;
        return $this;
    }

    /**
     * @param int|null $paymentServiceId
     * @return InvoicePaymentBody
     */
    public function setPaymentServiceId(?int $paymentServiceId): InvoicePaymentBody
    {
        $this->paymentServiceId = $paymentServiceId;
        return $this;
    }
}
