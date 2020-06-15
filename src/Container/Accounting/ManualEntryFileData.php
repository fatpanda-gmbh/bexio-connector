<?php

namespace Fatpanda\BexioConnector\Container\Accounting;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ManualEntryFileData extends ManualEntryFile
{
    /**
     * @var string
     * @SerializedName("data")
     * @Type("string")
     */
    protected $data;

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
}
