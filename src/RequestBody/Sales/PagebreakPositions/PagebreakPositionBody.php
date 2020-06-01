<?php

namespace Fatpanda\BexioConnector\RequestBody\Sales\PagebreakPositions;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class PagebreakPositionBody extends AbstractBody
{
    /**
     * @var boolean
     * @SerializedName("pagebreak")
     * @Type("boolean")
     */
    protected $pagebreak;

    /**
     * @param bool $pagebreak
     * @return PagebreakPositionBody
     */
    public function setPagebreak(bool $pagebreak): PagebreakPositionBody
    {
        $this->pagebreak = $pagebreak;
        return $this;
    }
}
