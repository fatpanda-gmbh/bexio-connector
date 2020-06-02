<?php

namespace Fatpanda\BexioConnector\Container\Sales;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SubpositionPosition implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("text")
     * @Type("string")
     */
    protected $text;

    /**
     * @var string|null
     * @SerializedName("pos")
     * @Type("string")
     */
    protected $pos;

    /**
     * @var integer
     * @SerializedName("internal_pos")
     * @Type("integer")
     */
    protected $internalPos;

    /**
     * @var boolean
     * @SerializedName("show_pos_nr")
     * @Type("boolean")
     */
    protected $showPosNr;

    /**
     * @var boolean
     * @SerializedName("is_optional")
     * @Type("boolean")
     */
    protected $isOptional;

    /**
     * @var string
     * @SerializedName("total_sum")
     * @Type("string")
     */
    protected $total_sum;

    /**
     * @var boolean
     * @SerializedName("show_pos_prices")
     * @Type("boolean")
     */
    protected $showPosPrices;

    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var integer|null
     * @SerializedName("parent_id")
     * @Type("integer")
     */
    protected $parentId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string|null
     */
    public function getPos(): ?string
    {
        return $this->pos;
    }

    /**
     * @return int
     */
    public function getInternalPos(): int
    {
        return $this->internalPos;
    }

    /**
     * @return bool
     */
    public function isShowPosNr(): bool
    {
        return $this->showPosNr;
    }

    /**
     * @return bool
     */
    public function isOptional(): bool
    {
        return $this->isOptional;
    }

    /**
     * @return string
     */
    public function getTotalSum(): string
    {
        return $this->total_sum;
    }

    /**
     * @return bool
     */
    public function isShowPosPrices(): bool
    {
        return $this->showPosPrices;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
}
