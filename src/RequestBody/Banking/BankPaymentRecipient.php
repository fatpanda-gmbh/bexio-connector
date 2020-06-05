<?php

namespace Fatpanda\BexioConnector\RequestBody\Banking;

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
     * @param string $name
     * @return BankPaymentRecipient
     */
    public function setName(string $name): BankPaymentRecipient
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $street
     * @return BankPaymentRecipient
     */
    public function setStreet(string $street): BankPaymentRecipient
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string $zip
     * @return BankPaymentRecipient
     */
    public function setZip(string $zip): BankPaymentRecipient
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @param string $city
     * @return BankPaymentRecipient
     */
    public function setCity(string $city): BankPaymentRecipient
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $countryCode
     * @return BankPaymentRecipient
     */
    public function setCountryCode(string $countryCode): BankPaymentRecipient
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @param string $houseNumber
     * @return BankPaymentRecipient
     */
    public function setHouseNumber(string $houseNumber): BankPaymentRecipient
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }
}
