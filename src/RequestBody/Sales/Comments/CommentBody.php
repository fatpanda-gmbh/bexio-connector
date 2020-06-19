<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Comments;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CommentBody extends AbstractBody
{
    /**
     * @var string
     * @SerializedName("text")
     * @Type("string")
     */
    protected $text;

    /**
     * @var integer|null
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var string|null
     * @SerializedName("user_email")
     * @Type("string")
     */
    protected $userEmail;

    /**
     * @var string
     * @SerializedName("user_name")
     * @Type("string")
     */
    protected $userName;

    /**
     * @var bool
     * @SerializedName("is_public")
     * @Type("bool")
     */
    protected $isPublic;

    /**
     * @param string $text
     * @return CommentBody
     */
    public function setText(string $text): CommentBody
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param int|null $userId
     * @return CommentBody
     */
    public function setUserId(?int $userId): CommentBody
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @param string|null $userEmail
     * @return CommentBody
     */
    public function setUserEmail(?string $userEmail): CommentBody
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    /**
     * @param string $userName
     * @return CommentBody
     */
    public function setUserName(string $userName): CommentBody
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @param bool $isPublic
     * @return CommentBody
     */
    public function setIsPublic(bool $isPublic): CommentBody
    {
        $this->isPublic = $isPublic;
        return $this;
    }
}
