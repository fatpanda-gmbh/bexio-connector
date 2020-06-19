<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\ExtendedPositions;

use Fatpanda\BexioConnector\RequestBody\Sales\TextPositions\TextPositionBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ExtendedTextPositionBody extends TextPositionBody
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'KbPositionText';
}
