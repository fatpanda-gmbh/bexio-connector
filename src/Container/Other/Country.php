<?php

namespace Fatpanda\BexioConnector\Container\Other;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Country implements ContainerInterface
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
     * @SerializedName("name_short")
     * @Type("string")
     */
    protected $nameShort;

    /**
     * @var string
     * @SerializedName("iso3166_alpha2")
     * @Type("string")
     */
    protected $iso3166Alpha2;

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
    public function getNameShort(): string
    {
        return $this->nameShort;
    }

    /**
     * @return string
     */
    public function getIso3166Alpha2(): string
    {
        return $this->iso3166Alpha2;
    }
}
