<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\TextPositions;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class TextPositionBody extends AbstractBody
{
    /**
     * @var string
     * @SerializedName("text")
     * @Type("string")
     */
    protected $text;

    /**
     * @var boolean
     * @SerializedName("show_pos_nr")
     * @Type("boolean")
     */
    protected $showPosNr;

    /**
     * @param string $text
     * @return TextPositionBody
     */
    public function setText(string $text): TextPositionBody
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param bool $showPosNr
     * @return TextPositionBody
     */
    public function setShowPosNr(bool $showPosNr): TextPositionBody
    {
        $this->showPosNr = $showPosNr;
        return $this;
    }
}
