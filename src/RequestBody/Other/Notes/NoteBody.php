<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Notes;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class NoteBody extends AbstractBody
{
    /**
     * @var int
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var DateTime
     * @SerializedName("event_start")
     * @Type("DateTime<'Y-m-d H:i:s'>")
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
     * @param int $userId
     * @return NoteBody
     */
    public function setUserId(int $userId): NoteBody
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @param DateTime $eventStart
     * @return NoteBody
     */
    public function setEventStart(DateTime $eventStart): NoteBody
    {
        $this->eventStart = $eventStart;
        return $this;
    }

    /**
     * @param string $subject
     * @return NoteBody
     */
    public function setSubject(string $subject): NoteBody
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @param string $info
     * @return NoteBody
     */
    public function setInfo(string $info): NoteBody
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @param int|null $contactId
     * @return NoteBody
     */
    public function setContactId(?int $contactId): NoteBody
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @param int|null $prProjectId
     * @return NoteBody
     */
    public function setPrProjectId(?int $prProjectId): NoteBody
    {
        $this->prProjectId = $prProjectId;
        return $this;
    }

    /**
     * @param int|null $entryId
     * @return NoteBody
     */
    public function setEntryId(?int $entryId): NoteBody
    {
        $this->entryId = $entryId;
        return $this;
    }

    /**
     * @param int|null $moduleId
     * @return NoteBody
     */
    public function setModuleId(?int $moduleId): NoteBody
    {
        $this->moduleId = $moduleId;
        return $this;
    }
}
