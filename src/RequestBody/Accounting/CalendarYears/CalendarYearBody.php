<?php

namespace Fatpanda\BexioConnector\RequestBody\Accounting\CalendarYears;

use Fatpanda\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CalendarYearBody extends AbstractBody
{
    /**
     * @var string
     * @SerializedName("year")
     * @Type("string")
     */
    protected $year;

    /**
     * @var boolean
     * @SerializedName("is_vat_subject")
     * @Type("boolean")
     */
    protected $isVatSubject;

    /**
     * @var string
     * @SerializedName("vat_accounting_method")
     * @Type("string")
     */
    protected $vatAccountingMethod;

    /**
     * @var string
     * @SerializedName("vat_accounting_type")
     * @Type("string")
     */
    protected $vatAccountingType;

    /**
     * @var integer
     * @SerializedName("default_tax_income_id")
     * @Type("integer")
     */
    protected $defaultTaxIncomeId;

    /**
     * @var integer
     * @SerializedName("default_tax_expense_id")
     * @Type("integer")
     */
    protected $defaultTaxExpenseId;

    /**
     * @param string $year
     * @return CalendarYearBody
     */
    public function setYear(string $year): CalendarYearBody
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @param bool $isVatSubject
     * @return CalendarYearBody
     */
    public function setIsVatSubject(bool $isVatSubject): CalendarYearBody
    {
        $this->isVatSubject = $isVatSubject;
        return $this;
    }

    /**
     * @param string $vatAccountingMethod
     * @return CalendarYearBody
     */
    public function setVatAccountingMethod(string $vatAccountingMethod): CalendarYearBody
    {
        $this->vatAccountingMethod = $vatAccountingMethod;
        return $this;
    }

    /**
     * @param string $vatAccountingType
     * @return CalendarYearBody
     */
    public function setVatAccountingType(string $vatAccountingType): CalendarYearBody
    {
        $this->vatAccountingType = $vatAccountingType;
        return $this;
    }

    /**
     * @param int $defaultTaxIncomeId
     * @return CalendarYearBody
     */
    public function setDefaultTaxIncomeId(int $defaultTaxIncomeId): CalendarYearBody
    {
        $this->defaultTaxIncomeId = $defaultTaxIncomeId;
        return $this;
    }

    /**
     * @param int $defaultTaxExpenseId
     * @return CalendarYearBody
     */
    public function setDefaultTaxExpenseId(int $defaultTaxExpenseId): CalendarYearBody
    {
        $this->defaultTaxExpenseId = $defaultTaxExpenseId;
        return $this;
    }
}
