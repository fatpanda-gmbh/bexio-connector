<?php

namespace Fatpanda\BexioConnector\RequestBody;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

abstract class AbstractSearchBodyItem implements SearchBodyItemInterface
{
    public const SEARCH_CRITERIA_EQUAL = "equal";
    public const SEARCH_CRITERIA_NOT_EQUAL = "not_equal";
    public const SEARCH_CRITERIA_GREATER_THAN = "greater_than";
    public const SEARCH_CRITERIA_GREATER_EQUAL = "greater_equal";
    public const SEARCH_CRITERIA_LESS_THAN = "less_than";
    public const SEARCH_CRITERIA_LESS_EQUAL = "less_equal";
    public const SEARCH_CRITERIA_LIKE = "like";
    public const SEARCH_CRITERIA_NOT_LIKE = "not_like";
    public const SEARCH_CRITERIA_IS_NULL = "is_null";
    public const SEARCH_CRITERIA_IS_NOT_NULL = "not_null";

    /**
     * @var string
     * @SerializedName("field")
     * @Type("string")
     */
    protected $field;

    /**
     * @var string
     * @SerializedName("value")
     * @Type("string")
     */
    protected $value;

    /**
     * @var string|null
     * @SerializedName("criteria")
     * @Type("string")
     */
    protected $criteria;

    /**
     * @param string $field
     * @return $this
     */
    public function setField(string $field): SearchBodyItemInterface
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value): SearchBodyItemInterface
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param string|null $criteria
     * @return $this
     */
    public function setCriteria(?string $criteria): SearchBodyItemInterface
    {
        $this->criteria = $criteria;

        return $this;
    }
}
