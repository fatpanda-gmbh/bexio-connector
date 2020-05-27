<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\ContactRelations;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ContactRelationBody extends AbstractBody
{
    /**
     * @var int|null
     * @SerializedName("contact_id")
     * @Type("int")
     */
    protected $contactId;

    /**
     * @var int|null
     * @SerializedName("contact_sub_id")
     * @Type("int")
     */
    protected $contactSubId;

    /**
     * @var string|null
     * @SerializedName("description")
     * @Type("string")
     */
    protected $description;

    /**
     * @param int|null $contactId
     * @return ContactRelationBody
     */
    public function setContactId(?int $contactId): ContactRelationBody
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @param int|null $contactSubId
     * @return ContactRelationBody
     */
    public function setContactSubId(?int $contactSubId): ContactRelationBody
    {
        $this->contactSubId = $contactSubId;
        return $this;
    }

    /**
     * @param string|null $description
     * @return ContactRelationBody
     */
    public function setDescription(?string $description): ContactRelationBody
    {
        $this->description = $description;
        return $this;
    }
}
