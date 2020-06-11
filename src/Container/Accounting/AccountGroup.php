<?php

namespace Fatpanda\BexioConnector\Container\Accounting;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class AccountGroup implements ContainerInterface
{
    /**
     * @var integer
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("account_no")
     * @Type("string")
     */
    protected $accountNo;

    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    protected $name;

    /**
     * @var integer
     * @SerializedName("parent_fibu_account_group_id")
     * @Type("integer")
     */
    protected $parentFibuAccountGroupId;

    /**
     * @var boolean
     * @SerializedName("is_active")
     * @Type("boolean")
     */
    protected $isActive;

    /**
     * @var boolean
     * @SerializedName("is_locked")
     * @Type("boolean")
     */
    protected $isLocked;

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
    public function getAccountNo(): string
    {
        return $this->accountNo;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getParentFibuAccountGroupId(): int
    {
        return $this->parentFibuAccountGroupId;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @return bool
     */
    public function isLocked(): bool
    {
        return $this->isLocked;
    }
}
