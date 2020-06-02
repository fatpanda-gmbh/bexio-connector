<?php

namespace Fatpanda\BexioConnector\RequestBody\Contacts\Contacts;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use Fatpanda\BexioConnector\RequestBody\RequestBodyItemInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ContactBody extends AbstractBody implements RequestBodyItemInterface
{
    public const CONTACT_TYPE_COMPANY = 1;
    public const CONTACT_TYPE_PERSON = 2;

    /**
     * @var int
     * @SerializedName("contact_type_id")
     * @Type("int")
     */
    protected $contactTypeId;

    /**
     * @var string
     * @SerializedName("name_1")
     * @Type("string")
     */
    protected $name1;

    /**
     * @var string|null
     * @SerializedName("name_2")
     * @Type("string")
     */
    protected $name2;

    /**
     * @var int|null
     * @SerializedName("salutation_id")
     * @Type("int")
     */
    protected $salutationId;

    /**
     * @var int|null
     * @SerializedName("salutation_form")
     * @Type("int")
     */
    protected $salutationForm;

    /**
     * @var int|null
     * @SerializedName("title_id")
     * @Type("int")
     */
    protected $titleId;

    /**
     * @var DateTime|null
     * @SerializedName("birthday")
     * @Type("date")
     */
    protected $birthday;

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
     * @var string|null
     * @SerializedName("mail")
     * @Type("string")
     */
    protected $mail;

    /**
     * @var string|null
     * @SerializedName("mail_second")
     * @Type("string")
     */
    protected $mailSecond;

    /**
     * @var string|null
     * @SerializedName("phone_fixed")
     * @Type("string")
     */
    protected $phoneFixed;

    /**
     * @var string|null
     * @SerializedName("phone_fixed_second")
     * @Type("string")
     */
    protected $phoneFixedSecond;

    /**
     * @var string|null
     * @SerializedName("phone_mobile")
     * @Type("string")
     */
    protected $phoneMobile;

    /**
     * @var string|null
     * @SerializedName("fax")
     * @Type("string")
     */
    protected $fax;

    /**
     * @var string|null
     * @SerializedName("url")
     * @Type("string")
     */
    protected $url;

    /**
     * @var string|null
     * @SerializedName("skype_name")
     * @Type("string")
     */
    protected $skypeName;

    /**
     * @var string|null
     * @SerializedName("remarks")
     * @Type("string")
     */
    protected $remarks;

    /**
     * @var int|null
     * @SerializedName("language_id")
     * @Type("int")
     */
    protected $languageId;

    /**
     * @var string|null
     * @SerializedName("contact_group_ids")
     * @Type("string")
     */
    protected $contactGroupIds;

    /**
     * @var string|null
     * @SerializedName("contact_branch_ids")
     * @Type("string")
     */
    protected $contactBranchIds;

    /**
     * @var int
     * @SerializedName("user_id")
     * @Type("int")
     */
    protected $userId;

    /**
     * @var int
     * @SerializedName("owner_id")
     * @Type("int")
     */
    protected $ownerId;

    /**
     * @param int $contactTypeId
     * @return ContactBody
     */
    public function setContactTypeId(int $contactTypeId): ContactBody
    {
        $this->contactTypeId = $contactTypeId;
        return $this;
    }

    /**
     * @param string $name1
     * @return ContactBody
     */
    public function setName1(string $name1): ContactBody
    {
        $this->name1 = $name1;
        return $this;
    }

    /**
     * @param string|null $name2
     * @return ContactBody
     */
    public function setName2(?string $name2): ContactBody
    {
        $this->name2 = $name2;
        return $this;
    }

    /**
     * @param int|null $salutationId
     * @return ContactBody
     */
    public function setSalutationId(?int $salutationId): ContactBody
    {
        $this->salutationId = $salutationId;
        return $this;
    }

    /**
     * @param int|null $salutationForm
     * @return ContactBody
     */
    public function setSalutationForm(?int $salutationForm): ContactBody
    {
        $this->salutationForm = $salutationForm;
        return $this;
    }

    /**
     * @param int|null $titleId
     * @return ContactBody
     */
    public function setTitleId(?int $titleId): ContactBody
    {
        $this->titleId = $titleId;
        return $this;
    }

    /**
     * @param DateTime|null $birthday
     * @return ContactBody
     */
    public function setBirthday(?DateTime $birthday): ContactBody
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * @param string|null $address
     * @return ContactBody
     */
    public function setAddress(?string $address): ContactBody
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string|null $postcode
     * @return ContactBody
     */
    public function setPostcode(?string $postcode): ContactBody
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @param string|null $city
     * @return ContactBody
     */
    public function setCity(?string $city): ContactBody
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param int|null $countryId
     * @return ContactBody
     */
    public function setCountryId(?int $countryId): ContactBody
    {
        $this->countryId = $countryId;
        return $this;
    }

    /**
     * @param string|null $mail
     * @return ContactBody
     */
    public function setMail(?string $mail): ContactBody
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @param string|null $mailSecond
     * @return ContactBody
     */
    public function setMailSecond(?string $mailSecond): ContactBody
    {
        $this->mailSecond = $mailSecond;
        return $this;
    }

    /**
     * @param string|null $phoneFixed
     * @return ContactBody
     */
    public function setPhoneFixed(?string $phoneFixed): ContactBody
    {
        $this->phoneFixed = $phoneFixed;
        return $this;
    }

    /**
     * @param string|null $phoneFixedSecond
     * @return ContactBody
     */
    public function setPhoneFixedSecond(?string $phoneFixedSecond): ContactBody
    {
        $this->phoneFixedSecond = $phoneFixedSecond;
        return $this;
    }

    /**
     * @param string|null $phoneMobile
     * @return ContactBody
     */
    public function setPhoneMobile(?string $phoneMobile): ContactBody
    {
        $this->phoneMobile = $phoneMobile;
        return $this;
    }

    /**
     * @param string|null $fax
     * @return ContactBody
     */
    public function setFax(?string $fax): ContactBody
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @param string|null $url
     * @return ContactBody
     */
    public function setUrl(?string $url): ContactBody
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param string|null $skypeName
     * @return ContactBody
     */
    public function setSkypeName(?string $skypeName): ContactBody
    {
        $this->skypeName = $skypeName;
        return $this;
    }

    /**
     * @param string|null $remarks
     * @return ContactBody
     */
    public function setRemarks(?string $remarks): ContactBody
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * @param int|null $languageId
     * @return ContactBody
     */
    public function setLanguageId(?int $languageId): ContactBody
    {
        $this->languageId = $languageId;
        return $this;
    }

    /**
     * @param string|null $contactGroupIds
     * @return ContactBody
     */
    public function setContactGroupIds(?string $contactGroupIds): ContactBody
    {
        $this->contactGroupIds = $contactGroupIds;
        return $this;
    }

    /**
     * @param string|null $contactBranchIds
     * @return ContactBody
     */
    public function setContactBranchIds(?string $contactBranchIds): ContactBody
    {
        $this->contactBranchIds = $contactBranchIds;
        return $this;
    }

    /**
     * @param int $userId
     * @return ContactBody
     */
    public function setUserId(int $userId): ContactBody
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @param int $ownerId
     * @return ContactBody
     */
    public function setOwnerId(int $ownerId): ContactBody
    {
        $this->ownerId = $ownerId;
        return $this;
    }
}
