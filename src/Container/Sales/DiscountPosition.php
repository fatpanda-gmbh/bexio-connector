<?php

namespace Fatpanda\BexioConnector\Container\Sales;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class DiscountPosition implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("text")
     * @Type("string")
     */
    protected $text;

    /**
     * @var boolean
     * @SerializedName("is_percentual")
     * @Type("boolean")
     */
    protected $isPercentual;

    /**
     * @var string
     * @SerializedName("value")
     * @Type("string")
     */
    protected $value;

    /**
     * @var string
     * @SerializedName("discount_total")
     * @Type("string")
     */
    protected $discountTotal;

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
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return bool
     */
    public function isPercentual(): bool
    {
        return $this->isPercentual;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getDiscountTotal(): string
    {
        return $this->discountTotal;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
