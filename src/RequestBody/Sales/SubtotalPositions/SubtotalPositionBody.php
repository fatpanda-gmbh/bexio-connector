<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\SubtotalPositions;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SubtotalPositionBody extends AbstractBody
{
    /**
     * @var string
     * @SerializedName("text")
     * @Type("string")
     */
    protected $text;

    /**
     * @param string $text
     * @return SubtotalPositionBody
     */
    public function setText(string $text): SubtotalPositionBody
    {
        $this->text = $text;
        return $this;
    }
}
