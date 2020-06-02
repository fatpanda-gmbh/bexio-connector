<?php

namespace Fatpanda\BexioConnector\Container\Sales;

use DateTime;
use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Delivery implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("document_nr")
     * @Type("string")
     */
    protected $documentNr;

    /**
     * @var string|null
     * @SerializedName("title")
     * @Type("string")
     */
    protected $title;

    /**
     * @var integer|null
     * @SerializedName("contact_id")
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @var integer|null
     * @SerializedName("contact_sub_id")
     * @Type("integer")
     */
    protected $contactSubId;

    /**
     * @var integer|null
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var integer
     * @SerializedName("logopaper_id")
     * @Type("integer")
     */
    protected $logopaperId;

    /**
     * @var integer
     * @SerializedName("language_id")
     * @Type("integer")
     */
    protected $languageId;

    /**
     * @var integer
     * @SerializedName("bank_account_id")
     * @Type("integer")
     */
    protected $bankAccountId;

    /**
     * @var integer
     * @SerializedName("currency_id")
     * @Type("integer")
     */
    protected $currencyId;

    /**
     * @var string
     * @SerializedName("header")
     * @Type("string")
     */
    protected $header;

    /**
     * @var string
     * @SerializedName("footer")
     * @Type("string")
     */
    protected $footer;

    /**
     * @var string
     * @SerializedName("total_gross")
     * @Type("string")
     */
    protected $totalGross;

    /**
     * @var string
     * @SerializedName("total_net")
     * @Type("string")
     */
    protected $totalNet;

    /**
     * @var string
     * @SerializedName("total_taxes")
     * @Type("string")
     */
    protected $totalTaxes;

    /**
     * @var string
     * @SerializedName("total")
     * @Type("string")
     */
    protected $total;

    /**
     * @var float
     * @SerializedName("total_rounding_difference")
     * @Type("float")
     */
    protected $totalRoundingDifference;

    /**
     * @var integer
     * @SerializedName("mwst_type")
     * @Type("integer")
     */
    protected $mwstType;

    /**
     * @var boolean
     * @SerializedName("mwst_is_net")
     * @Type("boolean")
     */
    protected $mwstIsNet;

    /**
     * @var DateTime
     * @SerializedName("is_valid_from")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $isValidFrom;

    /**
     * @var string
     * @SerializedName("contact_address")
     * @Type("string")
     */
    protected $contactAddress;

    /**
     * @var integer
     * @SerializedName("delivery_address_type")
     * @Type("integer")
     */
    protected $deliveryAddressType;

    /**
     * @var string
     * @SerializedName("delivery_address")
     * @Type("string")
     */
    protected $deliveryAddress;

    /**
     * @var integer
     * @SerializedName("kb_item_status_id")
     * @Type("integer")
     */
    protected $kbItemStatusId;

    /**
     * @var string|null
     * @SerializedName("api_reference")
     * @Type("string")
     */
    protected $apiReference;

    /**
     * @var string|null
     * @SerializedName("viewed_by_client_at")
     * @Type("string")
     */
    protected $viewedByClientAt;

    /**
     * @var DateTime
     * @SerializedName("updated_at")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $updatedAt;

    /**
     * @var array
     * @SerializedName("taxs")
     * @Type("array")
     */
    protected $taxs;

    /**
     * @var array
     * @SerializedName("positions")
     * @Type("array")
     */
    protected $positions;
}
