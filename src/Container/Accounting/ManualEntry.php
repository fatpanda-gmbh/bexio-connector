<?php

namespace Fatpanda\BexioConnector\Container\Accounting;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ManualEntry implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var DateTime
     * @SerializedName("date")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $date;

    /**
     * @var string
     * @SerializedName("reference_nr")
     * @Type("string")
     */
    protected $referenceNr;

    /**
     * @var integer
     * @SerializedName("created_by_user_id")
     * @Type("integer")
     */
    protected $createdByUserId;

    /**
     * @var integer
     * @SerializedName("edited_by_user_id")
     * @Type("integer")
     */
    protected $editedByUserId;

    /**
     * @var ManualEntryItem[]
     * @SerializedName("entries")
     * @Type("array")
     */
    protected $entries;

    /**
     * @var boolean
     * @SerializedName("is_locked")
     * @Type("boolean")
     */
    protected $isLocked;

    /**
     * @var string
     * @SerializedName("locked_info")
     * @Type("string")
     */
    protected $lockedInfo;

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
    public function getType(): string
    {
        return $this->type;
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
    public function getReferenceNr(): string
    {
        return $this->referenceNr;
    }

    /**
     * @return int
     */
    public function getCreatedByUserId(): int
    {
        return $this->createdByUserId;
    }

    /**
     * @return int
     */
    public function getEditedByUserId(): int
    {
        return $this->editedByUserId;
    }

    /**
     * @return ManualEntryItem[]
     */
    public function getEntries(): array
    {
        return $this->entries;
    }

    /**
     * @return bool
     */
    public function isLocked(): bool
    {
        return $this->isLocked;
    }

    /**
     * @return string
     */
    public function getLockedInfo(): string
    {
        return $this->lockedInfo;
    }
}
