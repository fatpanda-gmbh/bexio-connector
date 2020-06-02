<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\Orders;

use Fatpanda\BexioConnector\RequestBody\AbstractArrayBodyItem;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class PositionsArrayBodyItem extends AbstractArrayBodyItem
{
    public const POSITION_TYPE_ARTICLE = 'KbPositionArticle';
    public const POSITION_TYPE_CUSTOM = 'KbPositionCustom';
    public const POSITION_TYPE_TEXT = 'KbPositionText';
    public const POSITION_TYPE_SUBPOSITION = 'KbPositionSubposition';
    public const POSITION_TYPE_SUBTOTAL = 'KbPositionSubtotal';
    public const POSITION_TYPE_PAGEBREAK = 'KbPositionPagebreak';
    public const POSITION_TYPE_DISCOUNT = 'KbPositionDiscount';

    /**
     * @var integer
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var integer
     * @SerializedName("amount")
     * @Type("integer")
     */
    protected $amount;

    /**
     * @param int $id
     * @return PositionsArrayBodyItem
     */
    public function setId(int $id): PositionsArrayBodyItem
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $type
     * @return PositionsArrayBodyItem
     */
    public function setType(string $type): PositionsArrayBodyItem
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param int $amount
     * @return PositionsArrayBodyItem
     */
    public function setAmount(int $amount): PositionsArrayBodyItem
    {
        $this->amount = $amount;
        return $this;
    }
}
