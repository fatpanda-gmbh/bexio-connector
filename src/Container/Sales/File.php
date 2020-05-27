<?php

namespace Fatpanda\BexioConnector\Container\Sales;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class File implements ContainerInterface
{
    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    protected $name;

    /**
     * @var double
     * @SerializedName("size")
     * @Type("double")
     */
    protected $size;

    /**
     * @var string
     * @SerializedName("mime")
     * @Type("string")
     */
    protected $mime;

    /**
     * @var string
     * @SerializedName("content")
     * @Type("string")
     */
    protected $content;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getSize(): float
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getMime(): string
    {
        return $this->mime;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
