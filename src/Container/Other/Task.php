<?php

namespace Fatpanda\BexioConnector\Container\Other;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Task implements ContainerInterface
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
     * @var DateTime|null
     * @SerializedName("finish_date")
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    protected $finishDate;

    /**
     * @var string
     * @SerializedName("subject")
     * @Type("string")
     */
    protected $subject;

    /**
     * @var int|null
     * @SerializedName("place")
     * @Type("integer")
     */
    protected $place;

    /**
     * @var string
     * @SerializedName("info")
     * @Type("string")
     */
    protected $info;

    /**
     * @var int
     * @SerializedName("contact_id")
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @var int|null
     * @SerializedName("sub_contact_id")
     * @Type("integer")
     */
    protected $subContactId;

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
     * @var int
     * @SerializedName("todo_status_id")
     * @Type("integer")
     */
    protected $todoStatusId;

    /**
     * @var int|null
     * @SerializedName("todo_priority_id")
     * @Type("integer")
     */
    protected $todoPriorityId;

    /**
     * @var bool
     * @SerializedName("has_reminder")
     * @Type("bool")
     */
    protected $hasReminder;

    /**
     * @var int|null
     * @SerializedName("remember_type_id")
     * @Type("integer")
     */
    protected $rememberTypeId;

    /**
     * @var int|null
     * @SerializedName("remember_time_id")
     * @Type("integer")
     */
    protected $rememberTimeId;

    /**
     * @var int|null
     * @SerializedName("communication_kind_id")
     * @Type("integer")
     */
    protected $communicationKindId;

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
     * @return DateTime|null
     */
    public function getFinishDate(): ?DateTime
    {
        return $this->finishDate;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return int|null
     */
    public function getPlace(): ?int
    {
        return $this->place;
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * @return int
     */
    public function getContactId(): int
    {
        return $this->contactId;
    }

    /**
     * @return int|null
     */
    public function getSubContactId(): ?int
    {
        return $this->subContactId;
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

    /**
     * @return int
     */
    public function getTodoStatusId(): int
    {
        return $this->todoStatusId;
    }

    /**
     * @return int|null
     */
    public function getTodoPriorityId(): ?int
    {
        return $this->todoPriorityId;
    }

    /**
     * @return bool
     */
    public function isHasReminder(): bool
    {
        return $this->hasReminder;
    }

    /**
     * @return int|null
     */
    public function getRememberTypeId(): ?int
    {
        return $this->rememberTypeId;
    }

    /**
     * @return int|null
     */
    public function getRememberTimeId(): ?int
    {
        return $this->rememberTimeId;
    }

    /**
     * @return int|null
     */
    public function getCommunicationKindId(): ?int
    {
        return $this->communicationKindId;
    }
}
