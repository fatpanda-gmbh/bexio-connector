<?php

namespace Fatpanda\BexioConnector\Container\Accounting;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class NextReferenceNumber implements ContainerInterface
{
    /**
     * @var string
     * @SerializedName("next_ref_nr")
     * @Type("string")
     */
    protected $nextRefNr;

    /**
     * @return string
     */
    public function getNextRefNr(): string
    {
        return $this->nextRefNr;
    }
}
