<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\SubpositionPositions;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SubpositionPositionBody extends AbstractBody
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
     * @return SubpositionPositionBody
     */
    public function setText(string $text): SubpositionPositionBody
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param bool $showPosNr
     * @return SubpositionPositionBody
     */
    public function setShowPosNr(bool $showPosNr): SubpositionPositionBody
    {
        $this->showPosNr = $showPosNr;
        return $this;
    }
}
