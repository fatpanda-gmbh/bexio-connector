<?php

namespace Fatpanda\BexioConnector\Container\Banking;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class BankPaymentRecipient implements ContainerInterface
{
    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    protected $name;

    /**
     * @var string
     * @SerializedName("street")
     * @Type("string")
     */
    protected $street;

    /**
     * @var string
     * @SerializedName("zip")
     * @Type("string")
     */
    protected $zip;

    /**
     * @var string
     * @SerializedName("city")
     * @Type("string")
     */
    protected $city;

    /**
     * @var string
     * @SerializedName("country_code")
     * @Type("string")
     */
    protected $countryCode;

    /**
     * @var string
     * @SerializedName("house_number")
     * @Type("string")
     */
    protected $houseNumber;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }
}
