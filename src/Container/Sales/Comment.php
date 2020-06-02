<?php

namespace Fatpanda\BexioConnector\Container\Sales;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Comment implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

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
     * @var string
     * @SerializedName("date")
     * @Type("string")
     */
    protected $date;

    /**
     * @var bool
     * @SerializedName("is_public")
     * @Type("bool")
     */
    protected $isPublic;

    /**
     * base64 encoded image file content
     * @var string|null
     * @SerializedName("image")
     * @Type("string")
     */
    protected $image;

    /**
     * @var string|null
     * @SerializedName("image_path")
     * @Type("string")
     */
    protected $imagePath;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @return string|null
     */
    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return bool
     */
    public function isPublic(): bool
    {
        return $this->isPublic;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @return string|null
     */
    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }
}
