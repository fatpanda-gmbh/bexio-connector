<?php

namespace Fatpanda\BexioConnector\RequestBody\Accounting\ManualEntries;

use DateTime;
use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ManualEntryBody extends AbstractBody
{
    public const TYPE_MANUAL_SINGLE_ENTRY = 'manual_single_entry';
    public const TYPE_MANUAL_COMPOUND_ENTRY = 'manual_compound_entry';
    public const TYPE_MANUAL_GROUP_ENTRY = 'manual_group_entry';

    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var DateTime
     * @SerializedName("date")
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $date;

    /**
     * @var string
     * @SerializedName("reference_nr")
     * @Type("string")
     */
    protected $referenceNr;

    /**
     * @var array|ManualEntryItemBody[]
     * @SerializedName("entries")
     * @Type("array<Fatpanda\BexioConnector\RequestBody\Accounting\ManualEntries\ManualEntryItemBody>")
     */
    protected $entries;

    /**
     * @param string $type
     * @return ManualEntryBody
     */
    public function setType(string $type): ManualEntryBody
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param DateTime $date
     * @return ManualEntryBody
     */
    public function setDate(DateTime $date): ManualEntryBody
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param string $referenceNr
     * @return ManualEntryBody
     */
    public function setReferenceNr(string $referenceNr): ManualEntryBody
    {
        $this->referenceNr = $referenceNr;
        return $this;
    }

    /**
     * @param array|ManualEntryItemBody[] $entries
     * @return ManualEntryBody
     */
    public function setEntries(array $entries): ManualEntryBody
    {
        $this->entries = $entries;
        return $this;
    }
}
