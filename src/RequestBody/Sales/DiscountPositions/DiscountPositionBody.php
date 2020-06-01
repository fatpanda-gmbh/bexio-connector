<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\DiscountPositions;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class DiscountPositionBody extends AbstractBody
{
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
     * @param string $text
     * @return DiscountPositionBody
     */
    public function setText(string $text): DiscountPositionBody
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param bool $isPercentual
     * @return DiscountPositionBody
     */
    public function setIsPercentual(bool $isPercentual): DiscountPositionBody
    {
        $this->isPercentual = $isPercentual;
        return $this;
    }

    /**
     * @param string $value
     * @return DiscountPositionBody
     */
    public function setValue(string $value): DiscountPositionBody
    {
        $this->value = $value;
        return $this;
    }
}
