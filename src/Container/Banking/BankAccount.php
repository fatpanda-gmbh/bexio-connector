<?php

namespace Fatpanda\BexioConnector\Container\Banking;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class BankAccount implements ContainerInterface
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
     * @SerializedName("owner")
     * @Type("string")
     */
    protected $owner;

    /**
     * @var string
     * @SerializedName("owner_address")
     * @Type("string")
     */
    protected $ownerAddress;

    /**
     * @var string
     * @SerializedName("owner_zip")
     * @Type("string")
     */
    protected $ownerZip;

    /**
     * @var string
     * @SerializedName("owner_city")
     * @Type("string")
     */
    protected $ownerCity;

    /**
     * @var string
     * @SerializedName("bc_nr")
     * @Type("string")
     */
    protected $bcNr;

    /**
     * @var string
     * @SerializedName("bank_name")
     * @Type("string")
     */
    protected $bcName;

    /**
     * @var string
     * @SerializedName("bank_nr")
     * @Type("string")
     */
    protected $bankNr;

    /**
     * @var string
     * @SerializedName("bank_account_nr")
     * @Type("string")
     */
    protected $bankAccountNr;

    /**
     * @var string
     * @SerializedName("iban_nr")
     * @Type("string")
     */
    protected $ibanNr;

    /**
     * @var integer
     * @SerializedName("currency_id")
     * @Type("integer")
     */
    protected $currencyId;

    /**
     * @var integer
     * @SerializedName("account_id")
     * @Type("integer")
     */
    protected $accountId;

    /**
     * @var string
     * @SerializedName("remarks")
     * @Type("string")
     */
    protected $remarks;

    /**
     * @var bool
     * @SerializedName("is_esr")
     * @Type("bool")
     */
    protected $isEsr;

    /**
     * @var string
     * @SerializedName("esr_besr_id")
     * @Type("string")
     */
    protected $esrBesrId;

    /**
     * @var string
     * @SerializedName("esr_post_account_nr")
     * @Type("string")
     */
    protected $esrPostAccountNr;

    /**
     * @var string
     * @SerializedName("esr_payment_for_text")
     * @Type("string")
     */
    protected $esrPaymentForText;

    /**
     * @var string
     * @SerializedName("esr_in_favour_of_text")
     * @Type("string")
     */
    protected $esrInFavourOfText;

    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

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
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * @return string
     */
    public function getOwnerAddress(): string
    {
        return $this->ownerAddress;
    }

    /**
     * @return string
     */
    public function getOwnerZip(): string
    {
        return $this->ownerZip;
    }

    /**
     * @return string
     */
    public function getOwnerCity(): string
    {
        return $this->ownerCity;
    }

    /**
     * @return string
     */
    public function getBcNr(): string
    {
        return $this->bcNr;
    }

    /**
     * @return string
     */
    public function getBcName(): string
    {
        return $this->bcName;
    }

    /**
     * @return string
     */
    public function getBankNr(): string
    {
        return $this->bankNr;
    }

    /**
     * @return string
     */
    public function getBankAccountNr(): string
    {
        return $this->bankAccountNr;
    }

    /**
     * @return string
     */
    public function getIbanNr(): string
    {
        return $this->ibanNr;
    }

    /**
     * @return int
     */
    public function getCurrencyId(): int
    {
        return $this->currencyId;
    }

    /**
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }

    /**
     * @return string
     */
    public function getRemarks(): string
    {
        return $this->remarks;
    }

    /**
     * @return bool
     */
    public function isEsr(): bool
    {
        return $this->isEsr;
    }

    /**
     * @return string
     */
    public function getEsrBesrId(): string
    {
        return $this->esrBesrId;
    }

    /**
     * @return string
     */
    public function getEsrPostAccountNr(): string
    {
        return $this->esrPostAccountNr;
    }

    /**
     * @return string
     */
    public function getEsrPaymentForText(): string
    {
        return $this->esrPaymentForText;
    }

    /**
     * @return string
     */
    public function getEsrInFavourOfText(): string
    {
        return $this->esrInFavourOfText;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
