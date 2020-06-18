<?php

namespace Fatpanda\BexioConnector\Container\Other;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Permissions implements ContainerInterface
{
    /**
     * @var array
     * @SerializedName("components")
     * @Type("array")
     */
    protected $components;

    /**
     * @var array
     * @SerializedName("permissions")
     * @Type("array")
     */
    protected $permissions;
}
