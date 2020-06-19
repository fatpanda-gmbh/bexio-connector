<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales;

use Fatpanda\BexioConnector\RequestBody\Sales\ExtendedPositions\ExtendedDefaultPositionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\ExtendedPositions\ExtendedDiscountPositionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\ExtendedPositions\ExtendedItemPositionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\ExtendedPositions\ExtendedPagebreakPositionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\ExtendedPositions\ExtendedSubtotalPositionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\ExtendedPositions\ExtendedTextPositionBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

trait PositionTrait
{
    /**
     * @var array
     * @SerializedName("positions")
     * @Type("array")
     */
    protected $positions = [];

    /**
     * @param array $positions
     * @return void
     */
    public function setPositions(array $positions)
    {
        $this->positions = $positions;
    }

    public function createPositionDefault(): ExtendedDefaultPositionBody
    {
        $item = new ExtendedDefaultPositionBody();
        $this->setPositions(array_merge($this->positions, [$item]));
        return $item;
    }

    public function createPositionItem(): ExtendedItemPositionBody
    {
        $item = new ExtendedItemPositionBody();
        $this->setPositions(array_merge($this->positions, [$item]));
        return $item;
    }

    public function createPositionText(): ExtendedTextPositionBody
    {
        $item = new ExtendedTextPositionBody();
        $this->setPositions(array_merge($this->positions, [$item]));
        return $item;
    }

    public function createPositionSubtotal(): ExtendedSubtotalPositionBody
    {
        $item = new ExtendedSubtotalPositionBody();
        $this->setPositions(array_merge($this->positions, [$item]));
        return $item;
    }

    public function createPositionPagebreak(): ExtendedPagebreakPositionBody
    {
        $item = new ExtendedPagebreakPositionBody();
        $this->setPositions(array_merge($this->positions, [$item]));
        return $item;
    }

    public function createPositionDiscount(): ExtendedDiscountPositionBody
    {
        $item = new ExtendedDiscountPositionBody();
        $this->setPositions(array_merge($this->positions, [$item]));
        return $item;
    }
}
