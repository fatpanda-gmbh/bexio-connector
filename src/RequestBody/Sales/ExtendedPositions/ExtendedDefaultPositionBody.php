<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\ExtendedPositions;

use Fatpanda\BexioConnector\RequestBody\Sales\DefaultPositions\DefaultPositionBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ExtendedDefaultPositionBody extends DefaultPositionBody
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'KbPositionCustom';
}
