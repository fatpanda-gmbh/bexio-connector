<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\AdditionalAddresses;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class AdditionalAddressBody extends AbstractBody
{
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
     * @var string|null
     * @SerializedName("description")
     * @Type("string")
     */
    protected $description;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return AdditionalAddressBody
     */
    public function setName(string $name): AdditionalAddressBody
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     * @return AdditionalAddressBody
     */
    public function setAddress(?string $address): AdditionalAddressBody
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    /**
     * @param string|null $postcode
     * @return AdditionalAddressBody
     */
    public function setPostcode(?string $postcode): AdditionalAddressBody
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return AdditionalAddressBody
     */
    public function setCity(?string $city): AdditionalAddressBody
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    /**
     * @param int|null $countryId
     * @return AdditionalAddressBody
     */
    public function setCountryId(?int $countryId): AdditionalAddressBody
    {
        $this->countryId = $countryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return AdditionalAddressBody
     */
    public function setSubject(string $subject): AdditionalAddressBody
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return AdditionalAddressBody
     */
    public function setDescription(?string $description): AdditionalAddressBody
    {
        $this->description = $description;
        return $this;
    }
}
