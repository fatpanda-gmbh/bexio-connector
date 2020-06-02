<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Invoices;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SendInvoiceBody extends AbstractBody
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
     * @var boolean
     * @SerializedName("mark_as_open")
     * @Type("boolean")
     */
    protected $markAsOpen;

    /**
     * @param string $recipientEmail
     * @return SendInvoiceBody
     */
    public function setRecipientEmail(string $recipientEmail): SendInvoiceBody
    {
        $this->recipientEmail = $recipientEmail;
        return $this;
    }

    /**
     * @param string $subject
     * @return SendInvoiceBody
     */
    public function setSubject(string $subject): SendInvoiceBody
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @param string $message
     * @return SendInvoiceBody
     */
    public function setMessage(string $message): SendInvoiceBody
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param bool $markAsOpen
     * @return SendInvoiceBody
     */
    public function setMarkAsOpen(bool $markAsOpen): SendInvoiceBody
    {
        $this->markAsOpen = $markAsOpen;
        return $this;
    }
}
