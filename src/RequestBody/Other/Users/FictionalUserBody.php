<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Users;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class FictionalUserBody extends AbstractBody
{
    public const SALUTATION_TYPE_MALE = 'male';
    public const SALUTATION_TYPE_FEMALE = 'female';

    /**
     * @var string
     * @SerializedName("salutation_type")
     * @Type("string")
     */
    protected $salutationType;

    /**
     * @var string
     * @SerializedName("firstname")
     * @Type("string")
     */
    protected $firstname;

    /**
     * @var string
     * @SerializedName("lastname")
     * @Type("string")
     */
    protected $lastname;

    /**
     * @var string
     * @SerializedName("email")
     * @Type("string")
     */
    protected $email;

    /**
     * @var integer
     * @SerializedName("title_id")
     * @Type("integer")
     */
    protected $titleId;

    /**
     * @param string $salutationType
     * @return FictionalUserBody
     */
    public function setSalutationType(string $salutationType): FictionalUserBody
    {
        $this->salutationType = $salutationType;
        return $this;
    }

    /**
     * @param string $firstname
     * @return FictionalUserBody
     */
    public function setFirstname(string $firstname): FictionalUserBody
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @param string $lastname
     * @return FictionalUserBody
     */
    public function setLastname(string $lastname): FictionalUserBody
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @param string $email
     * @return FictionalUserBody
     */
    public function setEmail(string $email): FictionalUserBody
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param int $titleId
     * @return FictionalUserBody
     */
    public function setTitleId(int $titleId): FictionalUserBody
    {
        $this->titleId = $titleId;
        return $this;
    }
}
