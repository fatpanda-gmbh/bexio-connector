<?php

namespace Fatpanda\BexioConnector\Response;

use Fatpanda\BexioConnector\Message\Response;

class ErrorResponse extends Response
{

    /** @var int|null */
    private $code;

    /** @var string|null */
    private $message;

    public function isSuccessResponse(): bool
    {
        return false;
    }

    /**
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int|null $code
     * @return ErrorResponse
     */
    public function setCode(?int $code): ErrorResponse
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return ErrorResponse
     */
    public function setMessage(?string $message): ErrorResponse
    {
        $this->message = $message;
        return $this;
    }
}
