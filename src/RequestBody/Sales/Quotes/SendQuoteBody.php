<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Quotes;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SendQuoteBody extends AbstractBody
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
     * @return SendQuoteBody
     */
    public function setRecipientEmail(string $recipientEmail): SendQuoteBody
    {
        $this->recipientEmail = $recipientEmail;
        return $this;
    }

    /**
     * @param string $subject
     * @return SendQuoteBody
     */
    public function setSubject(string $subject): SendQuoteBody
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @param string $message
     * @return SendQuoteBody
     */
    public function setMessage(string $message): SendQuoteBody
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param bool $markAsOpen
     * @return SendQuoteBody
     */
    public function setMarkAsOpen(bool $markAsOpen): SendQuoteBody
    {
        $this->markAsOpen = $markAsOpen;
        return $this;
    }
}
