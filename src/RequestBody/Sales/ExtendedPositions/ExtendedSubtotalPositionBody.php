<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\ExtendedPositions;

use Fatpanda\BexioConnector\RequestBody\Sales\SubtotalPositions\SubtotalPositionBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ExtendedSubtotalPositionBody extends SubtotalPositionBody
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'KbPositionSubtotal';
}
