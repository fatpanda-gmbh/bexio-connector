<?php

namespace Fatpanda\BexioConnector\Container\Projects;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class BusinessActivity implements ContainerInterface
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
     * @var bool|null
     * @SerializedName("default_is_billable")
     * @Type("bool")
     */
    protected $defaultIsBillable;

    /**
     * @var double|null
     * @SerializedName("default_price_per_hour")
     * @Type("double")
     */
    protected $defaultPricePerHour;

    /**
     * @var integer|null
     * @SerializedName("account_id")
     * @Type("integer")
     */
    protected $accountId;

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
     * @return bool|null
     */
    public function getDefaultIsBillable(): ?bool
    {
        return $this->defaultIsBillable;
    }

    /**
     * @return float|null
     */
    public function getDefaultPricePerHour(): ?float
    {
        return $this->defaultPricePerHour;
    }

    /**
     * @return int|null
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }
}
