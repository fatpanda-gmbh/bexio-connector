<?php

namespace Fatpanda\BexioConnector\RequestBody\Other\Countries;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CountryBody extends AbstractBody
{
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
     * @param string $name
     * @return CountryBody
     */
    public function setName(string $name): CountryBody
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $nameShort
     * @return CountryBody
     */
    public function setNameShort(string $nameShort): CountryBody
    {
        $this->nameShort = $nameShort;
        return $this;
    }

    /**
     * @param string $iso3166Alpha2
     * @return CountryBody
     */
    public function setIso3166Alpha2(string $iso3166Alpha2): CountryBody
    {
        $this->iso3166Alpha2 = $iso3166Alpha2;
        return $this;
    }
}
