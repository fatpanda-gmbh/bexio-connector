<?php

namespace Fatpanda\BexioConnector\Container\Contacts;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Contact implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("nr")
     * @Type("string")
     */
    protected $nr;

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
     * @var bool
     * @SerializedName("is_lead")
     * @Type("bool")
     * @deprecated
     */
    protected $isLead;

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
     * @var DateTime
     * @SerializedName("updated_at")
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $updatedAt;

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
    public function getNr(): string
    {
        return $this->nr;
    }

    /**
     * @return int
     */
    public function getContactTypeId(): int
    {
        return $this->contactTypeId;
    }

    /**
     * @return string
     */
    public function getName1(): string
    {
        return $this->name1;
    }

    /**
     * @return string|null
     */
    public function getName2(): ?string
    {
        return $this->name2;
    }

    /**
     * @return int|null
     */
    public function getSalutationId(): ?int
    {
        return $this->salutationId;
    }

    /**
     * @return int|null
     */
    public function getSalutationForm(): ?int
    {
        return $this->salutationForm;
    }

    /**
     * @return int|null
     */
    public function getTitleId(): ?int
    {
        return $this->titleId;
    }

    /**
     * @return DateTime|null
     */
    public function getBirthday(): ?DateTime
    {
        return $this->birthday;
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
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @return string|null
     */
    public function getMailSecond(): ?string
    {
        return $this->mailSecond;
    }

    /**
     * @return string|null
     */
    public function getPhoneFixed(): ?string
    {
        return $this->phoneFixed;
    }

    /**
     * @return string|null
     */
    public function getPhoneFixedSecond(): ?string
    {
        return $this->phoneFixedSecond;
    }

    /**
     * @return string|null
     */
    public function getPhoneMobile(): ?string
    {
        return $this->phoneMobile;
    }

    /**
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return string|null
     */
    public function getSkypeName(): ?string
    {
        return $this->skypeName;
    }

    /**
     * @return string|null
     */
    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    /**
     * @return int|null
     */
    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    /**
     * @return bool
     * @deprecated
     */
    public function isLead(): bool
    {
        return $this->isLead;
    }

    /**
     * @return string|null
     */
    public function getContactGroupIds(): ?string
    {
        return $this->contactGroupIds;
    }

    /**
     * @return string|null
     */
    public function getContactBranchIds(): ?string
    {
        return $this->contactBranchIds;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getOwnerId(): int
    {
        return $this->ownerId;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }
}
