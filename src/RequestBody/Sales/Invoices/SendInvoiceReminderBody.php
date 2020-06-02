<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Invoices;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SendInvoiceReminderBody extends AbstractBody
{
    /**
     * @var string
     * @SerializedName("recipient_email")
     * @Type("string")
     */
    protected $recipientEmail;

    /**
     * @var string
     * @SerializedName("subject")
     * @Type("string")
     */
    protected $subject;

    /**
     * @var string
     * @SerializedName("message")
     * @Type("string")
     */
    protected $message;

    /**
     * @param string $recipientEmail
     * @return SendInvoiceReminderBody
     */
    public function setRecipientEmail(string $recipientEmail): SendInvoiceReminderBody
    {
        $this->recipientEmail = $recipientEmail;
        return $this;
    }

    /**
     * @param string $subject
     * @return SendInvoiceReminderBody
     */
    public function setSubject(string $subject): SendInvoiceReminderBody
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @param string $message
     * @return SendInvoiceReminderBody
     */
    public function setMessage(string $message): SendInvoiceReminderBody
    {
        $this->message = $message;
        return $this;
    }
}
