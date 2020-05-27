<?php

namespace Fatpanda\BexioConnector\Container\Other;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Company implements ContainerInterface
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
     * @var string
     * @SerializedName("address")
     * @Type("string")
     */
    protected $address;

    /**
     * @var string
     * @SerializedName("address_nr")
     * @Type("string")
     */
    protected $address_nr;

    /**
     * @var string
     * @SerializedName("postcode")
     * @Type("string")
     */
    protected $postcode;

    /**
     * @var string
     * @SerializedName("city")
     * @Type("string")
     */
    protected $city;

    /**
     * @var int
     * @SerializedName("country_id")
     * @Type("integer")
     */
    protected $country_id;

    /**
     * @var string
     * @SerializedName("legal_form")
     * @Type("string")
     */
    protected $legal_form;

    /**
     * @var string
     * @SerializedName("country_name")
     * @Type("string")
     */
    protected $country_name;

    /**
     * @var string
     * @SerializedName("mail")
     * @Type("string")
     */
    protected $mail;

    /**
     * @var string
     * @SerializedName("phone_fixed")
     * @Type("string")
     */
    protected $phone_fixed;

    /**
     * @var string
     * @SerializedName("phone_mobile")
     * @Type("string")
     */
    protected $phone_mobile;

    /**
     * @var string
     * @SerializedName("fax")
     * @Type("string")
     */
    protected $fax;

    /**
     * @var string
     * @SerializedName("url")
     * @Type("string")
     */
    protected $url;

    /**
     * @var string
     * @SerializedName("skype_name")
     * @Type("string")
     */
    protected $skype_name;

    /**
     * @var string
     * @SerializedName("facebook_name")
     * @Type("string")
     */
    protected $facebook_name;

    /**
     * @var string
     * @SerializedName("twitter_name")
     * @Type("string")
     */
    protected $twitter_name;

    /**
     * @var string
     * @SerializedName("description")
     * @Type("string")
     */
    protected $description;

    /**
     * @var string
     * @SerializedName("ust_id_nr")
     * @Type("string")
     */
    protected $ust_id_nr;

    /**
     * @var string
     * @SerializedName("mwst_nr")
     * @Type("string")
     */
    protected $mwst_nr;

    /**
     * @var string
     * @SerializedName("trade_register_nr")
     * @Type("string")
     */
    protected $trade_register_nr;

    /**
     * @var bool
     * @SerializedName("has_own_logo")
     * @Type("bool")
     */
    protected $has_own_logo;

    /**
     * @var bool
     * @SerializedName("is_public_profile")
     * @Type("bool")
     */
    protected $is_public_profile;

    /**
     * @var bool
     * @SerializedName("is_logo_public")
     * @Type("bool")
     */
    protected $is_logo_public;

    /**
     * @var bool
     * @SerializedName("is_address_public")
     * @Type("bool")
     */
    protected $is_address_public;

    /**
     * @var bool
     * @SerializedName("is_phone_public")
     * @Type("bool")
     */
    protected $is_phone_public;

    /**
     * @var bool
     * @SerializedName("is_mobile_public")
     * @Type("bool")
     */
    protected $is_mobile_public;

    /**
     * @var bool
     * @SerializedName("is_fax_public")
     * @Type("bool")
     */
    protected $is_fax_public;

    /**
     * @var bool
     * @SerializedName("is_mail_public")
     * @Type("bool")
     */
    protected $is_mail_public;

    /**
     * @var bool
     * @SerializedName("is_url_public")
     * @Type("bool")
     */
    protected $is_url_public;

    /**
     * @var bool
     * @SerializedName("is_skype_public")
     * @Type("bool")
     */
    protected $is_skype_public;

    /**
     * @var string
     * @SerializedName("logo_base64")
     * @Type("string")
     */
    protected $logo_base64;

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
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getAddressNr(): string
    {
        return $this->address_nr;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->country_id;
    }

    /**
     * @return string
     */
    public function getLegalForm(): string
    {
        return $this->legal_form;
    }

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->country_name;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @return string
     */
    public function getPhoneFixed(): string
    {
        return $this->phone_fixed;
    }

    /**
     * @return string
     */
    public function getPhoneMobile(): string
    {
        return $this->phone_mobile;
    }

    /**
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getSkypeName(): string
    {
        return $this->skype_name;
    }

    /**
     * @return string
     */
    public function getFacebookName(): string
    {
        return $this->facebook_name;
    }

    /**
     * @return string
     */
    public function getTwitterName(): string
    {
        return $this->twitter_name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getUstIdNr(): string
    {
        return $this->ust_id_nr;
    }

    /**
     * @return string
     */
    public function getMwstNr(): string
    {
        return $this->mwst_nr;
    }

    /**
     * @return string
     */
    public function getTradeRegisterNr(): string
    {
        return $this->trade_register_nr;
    }

    /**
     * @return bool
     */
    public function isHasOwnLogo(): bool
    {
        return $this->has_own_logo;
    }

    /**
     * @return bool
     */
    public function isIsPublicProfile(): bool
    {
        return $this->is_public_profile;
    }

    /**
     * @return bool
     */
    public function isIsLogoPublic(): bool
    {
        return $this->is_logo_public;
    }

    /**
     * @return bool
     */
    public function isIsAddressPublic(): bool
    {
        return $this->is_address_public;
    }

    /**
     * @return bool
     */
    public function isIsPhonePublic(): bool
    {
        return $this->is_phone_public;
    }

    /**
     * @return bool
     */
    public function isIsMobilePublic(): bool
    {
        return $this->is_mobile_public;
    }

    /**
     * @return bool
     */
    public function isIsFaxPublic(): bool
    {
        return $this->is_fax_public;
    }

    /**
     * @return bool
     */
    public function isIsMailPublic(): bool
    {
        return $this->is_mail_public;
    }

    /**
     * @return bool
     */
    public function isIsUrlPublic(): bool
    {
        return $this->is_url_public;
    }

    /**
     * @return bool
     */
    public function isIsSkypePublic(): bool
    {
        return $this->is_skype_public;
    }

    /**
     * @return string
     */
    public function getLogoBase64(): string
    {
        return $this->logo_base64;
    }
}
