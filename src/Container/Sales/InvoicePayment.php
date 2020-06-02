<?php

namespace Fatpanda\BexioConnector\Container\Sales;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InvoicePayment implements ContainerInterface
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
     * @var string
     * @SerializedName("title")
     * @Type("string")
     */
    protected $title;

    /**
     * @var integer|null
     * @SerializedName("payment_service_id")
     * @Type("integer")
     */
    protected $paymentServiceId;

    /**
     * @var boolean
     * @SerializedName("is_client_account_redemption")
     * @Type("boolean")
     */
    protected $isClientAccountRedemption;

    /**
     * @var boolean
     * @SerializedName("is_cash_discount")
     * @Type("boolean")
     */
    protected $isCashDiscount;

    /**
     * @var integer|null
     * @SerializedName("kb_invoice_id")
     * @Type("integer")
     */
    protected $kbInvoiceId;

    /**
     * @var integer|null
     * @SerializedName("kb_credit_voucher_id")
     * @Type("integer")
     */
    protected $kbCreditVoucherId;

    /**
     * @var integer|null
     * @SerializedName("kb_bill_id")
     * @Type("integer")
     */
    protected $kbBillId;

    /**
     * @var string|null
     * @SerializedName("kb_credit_voucher_text")
     * @Type("string")
     */
    protected $kbCreditVoucherText;

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
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return int|null
     */
    public function getBankAccountId(): ?int
    {
        return $this->bankAccountId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int|null
     */
    public function getPaymentServiceId(): ?int
    {
        return $this->paymentServiceId;
    }

    /**
     * @return bool
     */
    public function isClientAccountRedemption(): bool
    {
        return $this->isClientAccountRedemption;
    }

    /**
     * @return bool
     */
    public function isCashDiscount(): bool
    {
        return $this->isCashDiscount;
    }

    /**
     * @return int|null
     */
    public function getKbInvoiceId(): ?int
    {
        return $this->kbInvoiceId;
    }

    /**
     * @return int|null
     */
    public function getKbCreditVoucherId(): ?int
    {
        return $this->kbCreditVoucherId;
    }

    /**
     * @return int|null
     */
    public function getKbBillId(): ?int
    {
        return $this->kbBillId;
    }

    /**
     * @return string|null
     */
    public function getKbCreditVoucherText(): ?string
    {
        return $this->kbCreditVoucherText;
    }
}
