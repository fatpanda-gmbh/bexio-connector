<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Tasks;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class TaskBody extends AbstractBody
{
    /**
     * @var int
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var DateTime|null
     * @SerializedName("finish_date")
     * @Type("DateTime<'Y-m-d H:m:i'>")
     */
    protected $finishDate;

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
     * @SerializedName("pr_project_id")
     * @Type("integer")
     */
    protected $prProjectId;

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
     * @SerializedName("have_remember")
     * @Type("bool")
     */
    protected $haveRemember;

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
     * @param int $userId
     * @return TaskBody
     */
    public function setUserId(int $userId): TaskBody
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @param DateTime|null $finishDate
     * @return TaskBody
     */
    public function setFinishDate(?DateTime $finishDate): TaskBody
    {
        $this->finishDate = $finishDate;
        return $this;
    }

    /**
     * @param string $subject
     * @return TaskBody
     */
    public function setSubject(string $subject): TaskBody
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @param string $info
     * @return TaskBody
     */
    public function setInfo(string $info): TaskBody
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @param int $contactId
     * @return TaskBody
     */
    public function setContactId(int $contactId): TaskBody
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @param int|null $subContactId
     * @return TaskBody
     */
    public function setSubContactId(?int $subContactId): TaskBody
    {
        $this->subContactId = $subContactId;
        return $this;
    }

    /**
     * @param int|null $prProjectId
     * @return TaskBody
     */
    public function setPrProjectId(?int $prProjectId): TaskBody
    {
        $this->prProjectId = $prProjectId;
        return $this;
    }

    /**
     * @param int|null $entryId
     * @return TaskBody
     */
    public function setEntryId(?int $entryId): TaskBody
    {
        $this->entryId = $entryId;
        return $this;
    }

    /**
     * @param int|null $moduleId
     * @return TaskBody
     */
    public function setModuleId(?int $moduleId): TaskBody
    {
        $this->moduleId = $moduleId;
        return $this;
    }

    /**
     * @param int $todoStatusId
     * @return TaskBody
     */
    public function setTodoStatusId(int $todoStatusId): TaskBody
    {
        $this->todoStatusId = $todoStatusId;
        return $this;
    }

    /**
     * @param int|null $todoPriorityId
     * @return TaskBody
     */
    public function setTodoPriorityId(?int $todoPriorityId): TaskBody
    {
        $this->todoPriorityId = $todoPriorityId;
        return $this;
    }

    /**
     * @param bool $haveRemember
     * @return TaskBody
     */
    public function setHaveRemember(bool $haveRemember): TaskBody
    {
        $this->haveRemember = $haveRemember;
        return $this;
    }

    /**
     * @param int|null $rememberTypeId
     * @return TaskBody
     */
    public function setRememberTypeId(?int $rememberTypeId): TaskBody
    {
        $this->rememberTypeId = $rememberTypeId;
        return $this;
    }

    /**
     * @param int|null $rememberTimeId
     * @return TaskBody
     */
    public function setRememberTimeId(?int $rememberTimeId): TaskBody
    {
        $this->rememberTimeId = $rememberTimeId;
        return $this;
    }

    /**
     * @param int|null $communicationKindId
     * @return TaskBody
     */
    public function setCommunicationKindId(?int $communicationKindId): TaskBody
    {
        $this->communicationKindId = $communicationKindId;
        return $this;
    }
}
