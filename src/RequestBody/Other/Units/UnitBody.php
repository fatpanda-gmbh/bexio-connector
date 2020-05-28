<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Units;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class UnitBody extends AbstractBody
{
    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    protected $name;

    /**
     * @param string $name
     * @return UnitBody
     */
    public function setName(string $name): UnitBody
    {
        $this->name = $name;
        return $this;
    }
}
