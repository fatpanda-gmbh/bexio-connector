<?php

namespace Fatpanda\BexioConnector\Container\Contacts;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class AdditionalAddress implements ContainerInterface
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
     * @var string|null
     * @SerializedName("address")
     * @Type("string")
     */
    protected $address;

    /**
     * @var string|null
     * @SerializedName("postcode")
     * @Type("string")
     */
    protected $postcode;

    /**
     * @var string|null
     * @SerializedName("city")
     * @Type("string")
     */
    protected $city;

    /**
     * @var int|null
     * @SerializedName("country_id")
     * @Type("int")
     */
    protected $countryId;

    /**
     * @var string
     * @SerializedName("subject")
     * @Type("string")
     */
    protected $subject;

    /**
     * @var string
     * @SerializedName("description")
     * @Type("string")
     */
    protected $description;

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
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->countryId;
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
    public function getDescription(): string
    {
        return $this->description;
    }
}
