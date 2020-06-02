<?php

namespace Fatpanda\BexioConnector\RequestBody\Projects\BusinessActivities;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class BusinessActivityBody extends AbstractBody
{
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
     * @param string $name
     * @return BusinessActivityBody
     */
    public function setName(string $name): BusinessActivityBody
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param bool|null $defaultIsBillable
     * @return BusinessActivityBody
     */
    public function setDefaultIsBillable(?bool $defaultIsBillable): BusinessActivityBody
    {
        $this->defaultIsBillable = $defaultIsBillable;
        return $this;
    }

    /**
     * @param float|null $defaultPricePerHour
     * @return BusinessActivityBody
     */
    public function setDefaultPricePerHour(?float $defaultPricePerHour): BusinessActivityBody
    {
        $this->defaultPricePerHour = $defaultPricePerHour;
        return $this;
    }

    /**
     * @param int|null $accountId
     * @return BusinessActivityBody
     */
    public function setAccountId(?int $accountId): BusinessActivityBody
    {
        $this->accountId = $accountId;
        return $this;
    }
}
