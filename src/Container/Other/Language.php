<?php

namespace Fatpanda\BexioConnector\Container\Other;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Language implements ContainerInterface
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
     * @SerializedName("decimal_point")
     * @Type("string")
     */
    protected $decimalPoint;

    /**
     * @var string
     * @SerializedName("thousands_separator")
     * @Type("string")
     */
    protected $thousandsSeparator;

    /**
     * @var int
     * @SerializedName("date_format_id")
     * @Type("int")
     */
    protected $dateFormatId;

    /**
     * @var string
     * @SerializedName("date_format")
     * @Type("string")
     */
    protected $dateFormat;

    /**
     * @var string
     * @SerializedName("iso_639_1")
     * @Type("string")
     */
    protected $iso6391;

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
    public function getDecimalPoint(): string
    {
        return $this->decimalPoint;
    }

    /**
     * @return string
     */
    public function getThousandsSeparator(): string
    {
        return $this->thousandsSeparator;
    }

    /**
     * @return int
     */
    public function getDateFormatId(): int
    {
        return $this->dateFormatId;
    }

    /**
     * @return string
     */
    public function getDateFormat(): string
    {
        return $this->dateFormat;
    }

    /**
     * @return string
     */
    public function getIso6391(): string
    {
        return $this->iso6391;
    }
}
