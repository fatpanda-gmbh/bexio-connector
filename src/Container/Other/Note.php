<?php

namespace Fatpanda\BexioConnector\Container\Other;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Note implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var int
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var DateTime
     * @SerializedName("event_start")
     * @Type("DateTime<'Y-m-d H:m:i'>")
     */
    protected $eventStart;

    /**
     * @var string
     * @SerializedName("subject")
     * @Type("string")
     */
    protected $subject;

    /**
     * @var string
     * @SerializedName("info")
     * @Type("string")
     */
    protected $info;

    /**
     * @var int|null
     * @SerializedName("contact_id")
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @var int|null
     * @SerializedName("project_id")
     * @Type("integer")
     */
    protected $projectId;

    /**
     * @var int|null
     * @SerializedName("entry_id")
     * @Type("integer")
     */
    protected $entryId;

    /**
     * @var int|null
     * @SerializedName("module_id")
     * @Type("integer")
     */
    protected $moduleId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return DateTime
     */
    public function getEventStart(): DateTime
    {
        return $this->eventStart;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    /**
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @return int|null
     */
    public function getEntryId(): ?int
    {
        return $this->entryId;
    }

    /**
     * @return int|null
     */
    public function getModuleId(): ?int
    {
        return $this->moduleId;
    }
}
