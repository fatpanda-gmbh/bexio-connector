<?php

namespace Fatpanda\BexioConnector\Container\Accounting;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ManualEntryFile implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    protected $name;

    /**
     * @var integer
     * @SerializedName("size_in_bytes")
     * @Type("integer")
     */
    protected $sizeInBytes;

    /**
     * @var string
     * @SerializedName("extension")
     * @Type("string")
     */
    protected $extension;

    /**
     * @var string
     * @SerializedName("mime_type")
     * @Type("string")
     */
    protected $mime_type;

    /**
     * @var string
     * @SerializedName("processingSource")
     * @Type("string")
     */
    protected $processingSource;

    /**
     * @var string
     * @SerializedName("processing_status")
     * @Type("string")
     */
    protected $processingStatus;

    /**
     * @var integer
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var boolean
     * @SerializedName("is_archived")
     * @Type("boolean")
     */
    protected $isArchived;

    /**
     * @var integer
     * @SerializedName("source_id")
     * @Type("integer")
     */
    protected $sourceId;

    /**
     * @var DateTime
     * @SerializedName("created_at")
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    protected $createdAt;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getSizeInBytes(): int
    {
        return $this->sizeInBytes;
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mime_type;
    }

    /**
     * @return string
     */
    public function getProcessingSource(): string
    {
        return $this->processingSource;
    }

    /**
     * @return string
     */
    public function getProcessingStatus(): string
    {
        return $this->processingStatus;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return bool
     */
    public function isArchived(): bool
    {
        return $this->isArchived;
    }

    /**
     * @return int
     */
    public function getSourceId(): int
    {
        return $this->sourceId;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
