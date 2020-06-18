<?php

namespace Fatpanda\BexioConnector\Container\Other;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class FictionalUser implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSalutationType(): string
    {
        return $this->salutationType;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getTitleId(): int
    {
        return $this->titleId;
    }
}
