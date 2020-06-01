<?php

namespace Fatpanda\BexioConnector\Container\Sales;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class DocumentSetting implements ContainerInterface
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
     * @var string
     * @SerializedName("kb_item_class")
     * @Type("string")
     */
    protected $kbItemClass;

    /**
     * @var string
     * @SerializedName("enumeration_format")
     * @Type("string")
     */
    protected $enumerationFormat;

    /**
     * @var boolean
     * @SerializedName("use_automatic_enumeration")
     * @Type("boolean")
     */
    protected $useAutomaticEnumeration;

    /**
     * @var boolean
     * @SerializedName("use_yearly_enumeration")
     * @Type("boolean")
     */
    protected $useYearlyEnumeration;

    /**
     * @var integer
     * @SerializedName("next_nr")
     * @Type("integer")
     */
    protected $nextNr;

    /**
     * @var integer
     * @SerializedName("nr_min_length")
     * @Type("integer")
     */
    protected $nrMinLength;

    /**
     * @var integer
     * @SerializedName("default_time_period_in_days")
     * @Type("integer")
     */
    protected $defaultTimePeriodInDays;

    /**
     * @var integer
     * @SerializedName("default_logopaper_id")
     * @Type("integer")
     */
    protected $defaultLogopaperId;

    /**
     * @var integer
     * @SerializedName("default_language_id")
     * @Type("integer")
     */
    protected $defaultLanguageId;

    /**
     * @var integer
     * @SerializedName("default_client_bank_account_new_id")
     * @Type("integer")
     */
    protected $defaultClientBankAccountNewId;

    /**
     * @var integer
     * @SerializedName("default_currency_id")
     * @Type("integer")
     */
    protected $defaultCurrencyId;

    /**
     * @var integer
     * @SerializedName("default_mwst_type")
     * @Type("integer")
     */

    protected $defaultMwstType;
    /**
     * @var boolean
     * @SerializedName("default_mwst_is_net")
     * @Type("boolean")
     */
    protected $defaultMwstIsNet;

    /**
     * @var integer
     * @SerializedName("default_nb_decimals_amount")
     * @Type("integer")
     */
    protected $defaultNbDecimalsAmount;

    /**
     * @var integer
     * @SerializedName("default_nb_decimals_price")
     * @Type("integer")
     */
    protected $defaultNbDecimalsPrice;

    /**
     * @var boolean
     * @SerializedName("default_show_position_taxes")
     * @Type("boolean")
     */
    protected $defaultShowPositionTaxes;

    /**
     * @var string
     * @SerializedName("default_title")
     * @Type("string")
     */
    protected $defaultTitle;

    /**
     * @var boolean
     * @SerializedName("default_show_esr_on_same_page")
     * @Type("boolean")
     */
    protected $defaultShowEsrOnSamePage;

    /**
     * @var integer
     * @SerializedName("default_payment_type_id")
     * @Type("integer")
     */
    protected $defaultPaymentTypeId;

    /**
     * @var integer|null
     * @SerializedName("kb_terms_of_payment_template_id")
     * @Type("integer")
     */
    protected $kbTermsOfPaymentTemplateId;

    /**
     * @var boolean
     * @SerializedName("default_show_total")
     * @Type("boolean")
     */
    protected $defaultShowTotal;
}
