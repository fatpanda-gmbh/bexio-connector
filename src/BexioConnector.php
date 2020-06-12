<?php

namespace Fatpanda\BexioConnector;

use Fatpanda\BexioConnector\Message\Response;
use Fatpanda\BexioConnector\Request\Accounting\AccountGroups\ListAccountGroupsRequest;
use Fatpanda\BexioConnector\Request\Accounting\Accounts\ListAccountsRequest;
use Fatpanda\BexioConnector\Request\Accounting\Accounts\SearchAccountsRequest;
use Fatpanda\BexioConnector\Request\Accounting\BusinessYears\ListBusinessYearsRequest;
use Fatpanda\BexioConnector\Request\Accounting\BusinessYears\ShowBusinessYearRequest;
use Fatpanda\BexioConnector\Request\Accounting\CalendarYears\CreateCalendarYearRequest;
use Fatpanda\BexioConnector\Request\Accounting\CalendarYears\ListCalendarYearsRequest;
use Fatpanda\BexioConnector\Request\Accounting\CalendarYears\SearchCalendarYearsRequest;
use Fatpanda\BexioConnector\Request\Accounting\CalendarYears\ShowCalendarYearRequest;
use Fatpanda\BexioConnector\Request\Accounting\Currencies\CreateCurrencyRequest;
use Fatpanda\BexioConnector\Request\Accounting\Currencies\DeleteCurrencyRequest;
use Fatpanda\BexioConnector\Request\Accounting\Currencies\ListCurrenciesRequest;
use Fatpanda\BexioConnector\Request\Accounting\Currencies\ListExchangeRatesRequest;
use Fatpanda\BexioConnector\Request\Accounting\Currencies\SearchCurrenciesRequest;
use Fatpanda\BexioConnector\Request\Accounting\Currencies\ShowCurrencyRequest;
use Fatpanda\BexioConnector\Request\Accounting\Reports\ListJournalEntriesRequest;
use Fatpanda\BexioConnector\Request\Accounting\Taxes\DeleteTaxRequest;
use Fatpanda\BexioConnector\Request\Accounting\Taxes\ListTaxesRequest;
use Fatpanda\BexioConnector\Request\Accounting\Taxes\ShowTaxRequest;
use Fatpanda\BexioConnector\Request\Accounting\VatPeriods\ListVatPeriodsRequest;
use Fatpanda\BexioConnector\Request\Accounting\VatPeriods\ShowVatPeriodRequest;
use Fatpanda\BexioConnector\Request\Banking\BankAccounts\ListBankAccountsRequest;
use Fatpanda\BexioConnector\Request\Banking\BankAccounts\ShowBankAccountRequest;
use Fatpanda\BexioConnector\Request\Banking\BankPayments\CancelBankPaymentRequest;
use Fatpanda\BexioConnector\Request\Banking\BankPayments\DeleteBankPaymentRequest;
use Fatpanda\BexioConnector\Request\Banking\BankPayments\ListBankPaymentsRequest;
use Fatpanda\BexioConnector\Request\Banking\IBANPayments\CreateIBANPaymentRequest;
use Fatpanda\BexioConnector\Request\Banking\IBANPayments\ShowIBANPaymentRequest;
use Fatpanda\BexioConnector\Request\Banking\IBANPayments\UpdateIBANPaymentRequest;
use Fatpanda\BexioConnector\Request\Banking\ISPayments\CreateISPaymentRequest;
use Fatpanda\BexioConnector\Request\Banking\ISPayments\ShowISPaymentRequest;
use Fatpanda\BexioConnector\Request\Banking\ISPayments\UpdateISPaymentRequest;
use Fatpanda\BexioConnector\Request\Banking\ISRPayments\CreateISRPaymentRequest;
use Fatpanda\BexioConnector\Request\Banking\ISRPayments\ShowISRPaymentRequest;
use Fatpanda\BexioConnector\Request\Banking\ISRPayments\UpdateISRPaymentRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\CreateAdditionalAddressRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\DeleteAdditionalAddressRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\EditAdditionalAddressRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\ListAdditionalAddressesRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\SearchAdditionalAddressesRequest;
use Fatpanda\BexioConnector\Request\Contacts\AdditionalAddresses\ShowAdditionalAddressRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\CreateContactGroupRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\DeleteContactGroupRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\EditContactGroupRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\ListContactGroupsRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\SearchContactGroupsRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactGroups\ShowContactGroupRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\CreateContactRelationRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\DeleteContactRelationRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\EditContactRelationRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\ListContactRelationsRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\SearchContactRelationsRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactRelations\ShowContactRelationRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\CreateContactRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\CreateContactsBulkRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\DeleteContactRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\EditContactRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\ListContactsRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\SearchContactsRequest;
use Fatpanda\BexioConnector\Request\Contacts\Contacts\ShowContactRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactSectors\ListContactSectorsRequest;
use Fatpanda\BexioConnector\Request\Contacts\ContactSectors\SearchContactSectorsRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\CreateSalutationRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\DeleteSalutationRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\EditSalutationRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\ListSalutationsRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\SearchSalutationsRequest;
use Fatpanda\BexioConnector\Request\Contacts\Salutations\ShowSalutationRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\CreateTitleRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\DeleteTitleRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\EditTitleRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\ListTitlesRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\SearchTitlesRequest;
use Fatpanda\BexioConnector\Request\Contacts\Titles\ShowTitleRequest;
use Fatpanda\BexioConnector\Request\Other\Companies\ListCompaniesRequest;
use Fatpanda\BexioConnector\Request\Other\Companies\ShowCompanyRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\CreateCountryRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\DeleteCountryRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\EditCountryRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\ListCountriesRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\SearchCountriesRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\ShowCountryRequest;
use Fatpanda\BexioConnector\Request\Other\Languages\ListLanguagesRequest;
use Fatpanda\BexioConnector\Request\Other\Languages\SearchLanguagesRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\CreateNoteRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\DeleteNoteRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\EditNoteRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\ListNotesRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\SearchNotesRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\ShowNoteRequest;
use Fatpanda\BexioConnector\Request\Other\PaymentTypes\ListPaymentTypesRequest;
use Fatpanda\BexioConnector\Request\Other\PaymentTypes\SearchPaymentTypesRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\CreateTaskRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\DeleteTaskRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\EditTaskRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ListTaskPrioritiesRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ListTaskStatusesRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\SearchTasksRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ShowTaskRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ListTasksRequest;
use Fatpanda\BexioConnector\Request\Other\Units\CreateUnitRequest;
use Fatpanda\BexioConnector\Request\Other\Units\DeleteUnitRequest;
use Fatpanda\BexioConnector\Request\Other\Units\EditUnitRequest;
use Fatpanda\BexioConnector\Request\Other\Units\ListUnitsRequest;
use Fatpanda\BexioConnector\Request\Other\Units\SearchUnitsRequest;
use Fatpanda\BexioConnector\Request\Other\Units\ShowUnitRequest;
use Fatpanda\BexioConnector\Request\Other\Users\ListUsersRequest;
use Fatpanda\BexioConnector\Request\Other\Users\ShowUserRequest;
use Fatpanda\BexioConnector\Request\Projects\BusinessActivities\CreateBusinessActivityRequest;
use Fatpanda\BexioConnector\Request\Projects\BusinessActivities\ListBusinessActivitiesRequest;
use Fatpanda\BexioConnector\Request\Projects\BusinessActivities\SearchBusinessActivitiesRequest;
use Fatpanda\BexioConnector\Request\Projects\CommunicationTypes\ListCommunicationTypesRequest;
use Fatpanda\BexioConnector\Request\Projects\CommunicationTypes\SearchCommunicationTypesRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\ArchiveProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\CreateProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\DeleteProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\EditProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\ListProjectsRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\ListProjectStatusRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\ListProjectTypesRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\SearchProjectsRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\ShowProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Projects\UnarchiveProjectRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\CreateTimesheetRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\DeleteTimesheetRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\EditTimesheetRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\ListTimesheetsRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\ListTimesheetStatusRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\SearchTimesheetsRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\ShowTimesheetRequest;
use Fatpanda\BexioConnector\Request\Sales\Comments\CreateCommentRequest;
use Fatpanda\BexioConnector\Request\Sales\Comments\ListCommentsRequest;
use Fatpanda\BexioConnector\Request\Sales\Comments\ShowCommentRequest;
use Fatpanda\BexioConnector\Request\Sales\DefaultPositions\CreateDefaultPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\DefaultPositions\DeleteDefaultPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\DefaultPositions\EditDefaultPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\DefaultPositions\ListDefaultPositionsRequest;
use Fatpanda\BexioConnector\Request\Sales\DefaultPositions\ShowDefaultPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\Deliveries\IssueDeliveryRequest;
use Fatpanda\BexioConnector\Request\Sales\Deliveries\ListDeliveriesRequest;
use Fatpanda\BexioConnector\Request\Sales\Deliveries\ShowDeliveryRequest;
use Fatpanda\BexioConnector\Request\Sales\DiscountPositions\CreateDiscountPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\DiscountPositions\DeleteDiscountPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\DiscountPositions\EditDiscountPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\DiscountPositions\ListDiscountPositionsRequest;
use Fatpanda\BexioConnector\Request\Sales\DiscountPositions\ShowDiscountPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\DocumentSettings\ListDocumentSettingsRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\CancelInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\CopyInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\CreateInvoicePaymentRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\CreateInvoiceReminderRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\CreateInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\DeleteInvoicePaymentRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\DeleteInvoiceReminderRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\DeleteInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\EditInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\IssueInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ListInvoicePaymentsRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ListInvoiceRemindersRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ListInvoicesRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\MarkAsSentInvoiceReminderRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\MarkAsSentInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\MarkAsUnsentInvoiceReminderRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\RevertIssueInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\SearchInvoiceRemindersRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\SearchInvoicesRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\SendInvoiceReminderRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\SendInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ShowInvoicePaymentRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ShowInvoicePDFRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ShowInvoiceReminderPDFRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ShowInvoiceReminderRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ShowInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\ItemPositions\CreateItemPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\ItemPositions\DeleteItemPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\ItemPositions\EditItemPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\ItemPositions\ListItemPositionsRequest;
use Fatpanda\BexioConnector\Request\Sales\ItemPositions\ShowItemPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\CreateDeliveryFromOrderRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\CreateInvoiceFromOrderRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\CreateOrderRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\DeleteOrderRepetitionRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\DeleteOrderRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\EditOrderRepetitionRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\EditOrderRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\ListOrdersRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\SearchOrdersRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\ShowOrderPDFRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\ShowOrderRepetitionRequest;
use Fatpanda\BexioConnector\Request\Sales\Orders\ShowOrderRequest;
use Fatpanda\BexioConnector\Request\Sales\PagebreakPositions\CreatePagebreakPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\PagebreakPositions\DeletePagebreakPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\PagebreakPositions\EditPagebreakPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\PagebreakPositions\ListPagebreakPositionsRequest;
use Fatpanda\BexioConnector\Request\Sales\PagebreakPositions\ShowPagebreakPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\AcceptQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\CopyQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\CreateInvoiceFromQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\CreateOrderFromQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\CreateQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\DeclineQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\DeleteQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\EditQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\IssueQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\ListQuotesRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\MarkAsSentQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\ReissueQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\RevertIssueQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\SearchQuotesRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\SendQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\ShowQuotePDFRequest;
use Fatpanda\BexioConnector\Request\Sales\Quotes\ShowQuoteRequest;
use Fatpanda\BexioConnector\Request\Sales\SubpositionPositions\CreateSubpositionPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\SubpositionPositions\DeleteSubpositionPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\SubpositionPositions\EditSubpositionPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\SubpositionPositions\ListSubpositionPositionsRequest;
use Fatpanda\BexioConnector\Request\Sales\SubpositionPositions\ShowSubpositionPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\SubtotalPositions\CreateSubtotalPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\SubtotalPositions\DeleteSubtotalPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\SubtotalPositions\EditSubtotalPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\SubtotalPositions\ListSubtotalPositionsRequest;
use Fatpanda\BexioConnector\Request\Sales\SubtotalPositions\ShowSubtotalPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\TextPositions\CreateTextPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\TextPositions\DeleteTextPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\TextPositions\EditTextPositionRequest;
use Fatpanda\BexioConnector\Request\Sales\TextPositions\ListTextPositionsRequest;
use Fatpanda\BexioConnector\Request\Sales\TextPositions\ShowTextPositionRequest;
use Fatpanda\BexioConnector\RequestBody\Accounting\Accounts\AccountsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Accounting\CalendarYears\CalendarYearBody;
use Fatpanda\BexioConnector\RequestBody\Accounting\CalendarYears\CalendarYearsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Accounting\Currencies\CurrencyBody;
use Fatpanda\BexioConnector\RequestBody\Banking\IBANPayments\IBANPaymentBody;
use Fatpanda\BexioConnector\RequestBody\Banking\ISPayments\ISPaymentBody;
use Fatpanda\BexioConnector\RequestBody\Banking\ISRPayments\ISRPaymentBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\AdditionalAddresses\AdditionalAddressBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\AdditionalAddresses\AdditionalAddressesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactGroups\ContactGroupBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactGroups\ContactGroupsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactRelations\ContactRelationBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactRelations\ContactRelationsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Contacts\ContactBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Contacts\ContactArrayBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Contacts\ContactsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Salutations\SalutationBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Salutations\SalutationsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactSectors\ContactSectorsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Titles\TitlesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Titles\TitleBody;
use Fatpanda\BexioConnector\RequestBody\Other\Countries\CountriesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Other\Countries\CountryBody;
use Fatpanda\BexioConnector\RequestBody\Other\Languages\LanguagesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Other\Notes\NoteBody;
use Fatpanda\BexioConnector\RequestBody\Other\Notes\NotesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Other\PaymentTypes\PaymentTypesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Other\Tasks\TaskBody;
use Fatpanda\BexioConnector\RequestBody\Other\Tasks\TasksSearchBody;
use Fatpanda\BexioConnector\RequestBody\Other\Units\UnitBody;
use Fatpanda\BexioConnector\RequestBody\Other\Units\UnitsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Projects\BusinessActivities\BusinessActivitiesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Projects\BusinessActivities\BusinessActivityBody;
use Fatpanda\BexioConnector\RequestBody\Projects\CommunicationTypes\CommunicationTypesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Projects\Projects\ProjectBody;
use Fatpanda\BexioConnector\RequestBody\Projects\Projects\ProjectsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Projects\Timesheets\TimesheetBody;
use Fatpanda\BexioConnector\RequestBody\Projects\Timesheets\TimesheetsSearchBody;
use Fatpanda\BexioConnector\RequestBody\RequestBodyInterface;
use Fatpanda\BexioConnector\RequestBody\Sales\Comments\CommentBody;
use Fatpanda\BexioConnector\RequestBody\Sales\DefaultPositions\DefaultPositionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\DiscountPositions\DiscountPositionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Invoices\CopyInvoiceBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoiceBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoicePaymentBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoiceRemindersSearchBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoicesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Invoices\SendInvoiceBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Invoices\SendInvoiceReminderBody;
use Fatpanda\BexioConnector\RequestBody\Sales\ItemPositions\ItemPositionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Orders\OrderBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Orders\OrderRepetitionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Orders\OrdersSearchBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Orders\PositionsArrayBody;
use Fatpanda\BexioConnector\RequestBody\Sales\PagebreakPositions\PagebreakPositionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Quotes\CopyQuoteBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Quotes\QuoteBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Quotes\QuotesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Quotes\SendQuoteBody;
use Fatpanda\BexioConnector\RequestBody\Sales\SubpositionPositions\SubpositionPositionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\SubtotalPositions\SubtotalPositionBody;
use Fatpanda\BexioConnector\RequestBody\Sales\TextPositions\TextPositionBody;
use Fatpanda\BexioConnector\RequestQuery\Accounting\AccountGroupsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Accounting\AccountsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Accounting\BusinessYearsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Accounting\CalendarYearsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Accounting\CurrenciesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Accounting\JournalEntriesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Accounting\TaxesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Accounting\VatPeriodsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Banking\BankAccountsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Banking\BankPaymentsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\AdditionalAddressesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\ContactGroupsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\ContactRelationsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\ContactSectorsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\ContactsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\SalutationsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Contacts\TitlesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\CountriesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\LanguagesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\NotesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\PaymentTypesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\TaskPrioritiesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\TasksRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\TaskStatusesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\UnitsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Other\UsersRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\BusinessActivitiesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\CommunicationTypesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\ProjectsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\ProjectStatusesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\ProjectTypesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\TimesheetsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Projects\TimesheetStatusRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\RequestQueryInterface;
use Fatpanda\BexioConnector\RequestQuery\Sales\CommentsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\DefaultPositionsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\DeliveriesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\DiscountPositionsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\DocumentSettingsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\InvoicePaymentsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\InvoicesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\ItemPositionsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\OrdersRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\PagebreakPositionsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\QuotesRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\SubpositionPositionsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\SubtotalPositionsRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\Sales\TextPositionsRequestQuery;
use Fatpanda\BexioConnector\Response\ErrorResponse;
use Fatpanda\BexioConnector\Response\SuccessResponse;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Log\LoggerInterface;

class BexioConnector
{
    /**
     * @var LoggerInterface|null
     */
    private $logger;

    /**
     * @var string|null
     */
    protected $token;

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var array
     */
    private $pathParameters = [];

    /**
     * @var RequestQueryInterface|null
     */
    private $query;

    /**
     * @var RequestBodyInterface
     */
    private $body;

    /**
     * BexioConnector constructor.
     * @param string|null $token
     * @param LoggerInterface $logger
     */
    public function __construct($token = null, LoggerInterface $logger = null)
    {
        $this->logger = $logger;
        $this->token = $token;

        $this->client = new Client([
            'timeout'  => 5,
        ]);
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    /**
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client): void
    {
        $this->client = $client;
    }

    // Accounting
    // Accounting\Accounts

    /**
     * @param AccountsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getAccountsList(?AccountsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListAccountsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param AccountsSearchBody $body
     * @param AccountsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchAccounts(
        int $contactId,
        AccountsSearchBody $body,
        ?AccountsRequestQuery $query = null
    ): Response {
        $this->pathParameters['contact_id'] = $contactId;
        $this->body = $body;
        $this->query = $query;
        $request = new SearchAccountsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Accounting\AccountGroups

    /**
     * @param AccountGroupsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getAccountGroupsList(?AccountGroupsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListAccountGroupsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Accounting\CalendarYears

    /**
     * @param CalendarYearsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCalendarYearsList(?CalendarYearsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListCalendarYearsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param CalendarYearBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCalendarYear(CalendarYearBody $body): Response
    {
        $this->body = $body;
        $request = new CreateCalendarYearRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param CalendarYearsSearchBody $body
     * @param CalendarYearsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchCalendarYears(
        CalendarYearsSearchBody $body,
        ?CalendarYearsRequestQuery $query = null
    ): Response {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchCalendarYearsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $calendarYearId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCalendarYear(int $calendarYearId): Response
    {
        $this->pathParameters['calendar_year_id'] = $calendarYearId;
        $request = new ShowCalendarYearRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Accounting\BusinessYears

    /**
     * @param BusinessYearsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getBusinessYearsList(?BusinessYearsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListBusinessYearsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $businessYearId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getBusinessYear(int $businessYearId): Response
    {
        $this->pathParameters['business_year_id'] = $businessYearId;
        $request = new ShowBusinessYearRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Accounting\Currencies

    /**
     * @param CurrenciesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCurrenciesList(?CurrenciesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListCurrenciesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param CurrencyBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCurrency(CurrencyBody $body): Response
    {
        $this->body = $body;
        $request = new CreateCurrencyRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $currencyId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCurrency(int $currencyId): Response
    {
        $this->pathParameters['currency_id'] = $currencyId;
        $request = new ShowCurrencyRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $currencyId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteCurrency(int $currencyId): Response
    {
        $this->pathParameters['currency_id'] = $currencyId;
        $request = new DeleteCurrencyRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $currencyId
     * @param CurrencyBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putCurrency(int $currencyId, CurrencyBody $body): Response
    {
        $this->pathParameters['currency_id'] = $currencyId;
        $this->body = $body;
        $request = new ShowCurrencyRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $currencyId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getListExchangeRates(int $currencyId): Response
    {
        $this->pathParameters['currency_id'] = $currencyId;
        $request = new ListExchangeRatesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Reports\JournalEntries

    /**
     * @param JournalEntriesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getJournalEntriesList(?JournalEntriesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListJournalEntriesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Accounting\Taxes

    /**
     * @param TaxesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTaxesList(?TaxesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTaxesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $taxId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTax(int $taxId): Response
    {
        $this->pathParameters['tax_id'] = $taxId;
        $request = new ShowTaxRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $taxId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteTax(int $taxId): Response
    {
        $this->pathParameters['tax_id'] = $taxId;
        $request = new DeleteTaxRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Accounting\VatPeriods

    /**
     * @param VatPeriodsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getVatPeriodsList(?VatPeriodsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListVatPeriodsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $bankAccountId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getVatPeriod(int $bankAccountId): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $request = new ShowVatPeriodRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Banking
    // Banking\BankAccounts

    /**
     * @param BankAccountsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getBankAccountsList(?BankAccountsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListBankAccountsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $bankAccountId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getBankAccount(int $bankAccountId): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $request = new ShowBankAccountRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Banking\BankPayments

    /**
     * @param BankPaymentsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getBankPaymentsList(?BankPaymentsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListBankPaymentsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int|string $paymentId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteBankPayment($paymentId): Response
    {
        $this->pathParameters['payment_id'] = $paymentId;
        $request = new DeleteBankPaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int|string $paymentId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCancelBankPayment($paymentId): Response
    {
        $this->pathParameters['payment_id'] = $paymentId;
        $request = new CancelBankPaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Banking\IBANPayments
    /**
     * @param int $bankAccountId
     * @param IBANPaymentBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postIBANPayment(int $bankAccountId, IBANPaymentBody $body): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $this->body = $body;
        $request = new CreateIBANPaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $bankAccountId
     * @param int|string $paymentId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getIBANPayment(int $bankAccountId, $paymentId): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $this->pathParameters['payment_id'] = $paymentId;
        $request = new ShowIBANPaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $bankAccountId
     * @param int|string $paymentId
     * @param IBANPaymentBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function patchIBANPayment(int $bankAccountId, $paymentId, IBANPaymentBody $body): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $this->pathParameters['payment_id'] = $paymentId;
        $this->body = $body;
        $request = new UpdateIBANPaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Banking\ISPayments
    /**
     * @param int $bankAccountId
     * @param ISPaymentBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postISPayment(int $bankAccountId, ISPaymentBody $body): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $this->body = $body;
        $request = new CreateISPaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $bankAccountId
     * @param int|string $paymentId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getISPayment(int $bankAccountId, $paymentId): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $this->pathParameters['payment_id'] = $paymentId;
        $request = new ShowISPaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $bankAccountId
     * @param int|string $paymentId
     * @param ISPaymentBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function patchISPayment(int $bankAccountId, $paymentId, ISPaymentBody $body): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $this->pathParameters['payment_id'] = $paymentId;
        $this->body = $body;
        $request = new UpdateISPaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Banking\ISRPayments
    /**
     * @param int $bankAccountId
     * @param ISRPaymentBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postISRPayment(int $bankAccountId, ISRPaymentBody $body): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $this->body = $body;
        $request = new CreateISRPaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $bankAccountId
     * @param int|string $paymentId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getISRPayment(int $bankAccountId, $paymentId): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $this->pathParameters['payment_id'] = $paymentId;
        $request = new ShowISRPaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $bankAccountId
     * @param int|string $paymentId
     * @param ISRPaymentBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function patchISRPayment(int $bankAccountId, $paymentId, ISRPaymentBody $body): Response
    {
        $this->pathParameters['bank_account_id'] = $bankAccountId;
        $this->pathParameters['payment_id'] = $paymentId;
        $this->body = $body;
        $request = new UpdateISRPaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts
    // Contacts\AdditionalAddresses

    /**
     * @param int $contactId
     * @param AdditionalAddressesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getAdditionalAddressesList(int $contactId, ?AdditionalAddressesRequestQuery $query = null): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->query = $query;
        $request = new ListAdditionalAddressesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param AdditionalAddressBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postAdditionalAddress(int $contactId, AdditionalAddressBody $body): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->body = $body;
        $request = new CreateAdditionalAddressRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param AdditionalAddressesSearchBody $body
     * @param AdditionalAddressesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchAdditionalAddresses(
        int $contactId,
        AdditionalAddressesSearchBody $body,
        ?AdditionalAddressesRequestQuery $query = null
    ): Response {
        $this->pathParameters['contact_id'] = $contactId;
        $this->body = $body;
        $this->query = $query;
        $request = new SearchAdditionalAddressesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param int $additionalAddressId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getAdditionalAddress(int $contactId, int $additionalAddressId): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->pathParameters['additional_address_id'] = $additionalAddressId;
        $request = new ShowAdditionalAddressRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param int $contactRelationId
     * @param AdditionalAddressBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putAdditionalAddress(int $contactId, int $contactRelationId, AdditionalAddressBody $body): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->pathParameters['contact_relation_id'] = $contactRelationId;
        $this->body = $body;
        $request = new EditAdditionalAddressRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param int $additionalAddressId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteAdditionalAddress(int $contactId, int $additionalAddressId): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->pathParameters['additional_address_id'] = $additionalAddressId;
        $request = new DeleteAdditionalAddressRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\ContactGroups

    /**
     * @param ContactGroupsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactGroupsList(?ContactGroupsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListContactGroupsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactGroupBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postContactGroup(ContactGroupBody $body): Response
    {
        $this->body = $body;
        $request = new CreateContactGroupRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactGroupsSearchBody $body
     * @param ContactGroupsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchContactGroups(ContactGroupsSearchBody $body, ?ContactGroupsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchContactGroupsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactGroupId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactGroup(int $contactGroupId): Response
    {
        $this->pathParameters['contact_group_id'] = $contactGroupId;
        $request = new ShowContactGroupRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactGroupId
     * @param ContactGroupBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putContactGroup(int $contactGroupId, ContactGroupBody $body): Response
    {
        $this->pathParameters['contact_group_id'] = $contactGroupId;
        $this->body = $body;
        $request = new EditContactGroupRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactGroupId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteContactGroup(int $contactGroupId): Response
    {
        $this->pathParameters['contact_group_id'] = $contactGroupId;
        $request = new DeleteContactGroupRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\ContactRelations

    /**
     * @param ContactRelationsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactRelationsList(?ContactRelationsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListContactRelationsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactRelationBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postContactRelation(ContactRelationBody $body): Response
    {
        $this->body = $body;
        $request = new CreateContactRelationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactRelationsSearchBody $body
     * @param ContactRelationsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchContactRelations(ContactRelationsSearchBody $body, ?ContactRelationsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchContactRelationsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactRelationId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactRelation(int $contactRelationId): Response
    {
        $this->pathParameters['contact_relation_id'] = $contactRelationId;
        $request = new ShowContactRelationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactRelationId
     * @param ContactRelationBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putContactRelation(int $contactRelationId, ContactRelationBody $body): Response
    {
        $this->pathParameters['contact_relation_id'] = $contactRelationId;
        $this->body = $body;
        $request = new EditContactRelationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactRelationId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteContactRelation(int $contactRelationId): Response
    {
        $this->pathParameters['contact_relation_id'] = $contactRelationId;
        $request = new DeleteContactRelationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\ContactSectors

    /**
     * @param ContactSectorsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactSectorsList(?ContactSectorsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListContactSectorsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactSectorsSearchBody $body
     * @param ContactSectorsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchContactSectors(ContactSectorsSearchBody $body, ?ContactSectorsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchContactSectorsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\Contacts

    /**
     * @param ContactsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContactsList(?ContactsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListContactsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postContact(ContactBody $body): Response
    {
        $this->body = $body;
        $request = new CreateContactRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactsSearchBody $body
     * @param ContactsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchContacts(ContactsSearchBody $body, ?ContactsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchContactsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getContact(int $contactId): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $request = new ShowContactRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @param ContactBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putContact(int $contactId, ContactBody $body): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $this->body = $body;
        $request = new EditContactRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $contactId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteContact(int $contactId): Response
    {
        $this->pathParameters['contact_id'] = $contactId;
        $request = new DeleteContactRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ContactArrayBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postContactsBulk(ContactArrayBody $body): Response
    {
        $this->body = $body;
        $request = new CreateContactsBulkRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\Salutations

    /**
     * @param SalutationsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getSalutationsList(?SalutationsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListSalutationsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param SalutationBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSalutation(SalutationBody $body): Response
    {
        $this->body = $body;
        $request = new CreateSalutationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param SalutationsSearchBody $body
     * @param SalutationsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchSalutations(SalutationsSearchBody $body, ?SalutationsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchSalutationsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $salutationId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getSalutation(int $salutationId): Response
    {
        $this->pathParameters['salutation_id'] = $salutationId;
        $request = new ShowSalutationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $salutationId
     * @param SalutationBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putSalutation(int $salutationId, SalutationBody $body): Response
    {
        $this->pathParameters['salutation_id'] = $salutationId;
        $this->body = $body;
        $request = new EditSalutationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $salutationId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteSalutation(int $salutationId): Response
    {
        $this->pathParameters['salutation_id'] = $salutationId;
        $request = new DeleteSalutationRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Contacts\Titles

    /**
     * @param TitlesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTitlesList(?TitlesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTitlesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TitleBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postTitle(TitleBody $body): Response
    {
        $this->body = $body;
        $request = new CreateTitleRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TitlesSearchBody $body
     * @param TitlesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchTitles(TitlesSearchBody $body, ?TitlesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchTitlesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $titleId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTitle(int $titleId): Response
    {
        $this->pathParameters['title_id'] = $titleId;
        $request = new ShowTitleRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $titleId
     * @param TitleBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putTitle(int $titleId, TitleBody $body): Response
    {
        $this->pathParameters['title_id'] = $titleId;
        $this->body = $body;
        $request = new EditTitleRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $titleId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteTitle(int $titleId): Response
    {
        $this->pathParameters['title_id'] = $titleId;
        $request = new DeleteTitleRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other
    // Other\Companies

    /**
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCompaniesList(): Response
    {
        $request = new ListCompaniesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $companyId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCompany(int $companyId): Response
    {
        $this->pathParameters['profile_id'] = $companyId;
        $request = new ShowCompanyRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Countries

    /**
     * @param CountriesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCountriesList(?CountriesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListCountriesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param CountryBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCountry(CountryBody $body): Response
    {
        $this->body = $body;
        $request = new CreateCountryRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param CountriesSearchBody $body
     * @param CountriesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchCountries(CountriesSearchBody $body, ?CountriesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchCountriesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $countryId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCountry(int $countryId): Response
    {
        $this->pathParameters['country_id'] = $countryId;
        $request = new ShowCountryRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $countryId
     * @param CountryBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putCountry(int $countryId, CountryBody $body): Response
    {
        $this->pathParameters['country_id'] = $countryId;
        $this->body = $body;
        $request = new EditCountryRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $countryId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteCountry(int $countryId): Response
    {
        $this->pathParameters['country_id'] = $countryId;
        $request = new DeleteCountryRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Languages

    /**
     * @param LanguagesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getLanguagesList(?LanguagesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListLanguagesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param LanguagesSearchBody $body
     * @param LanguagesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchLanguages(LanguagesSearchBody $body, ?LanguagesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchLanguagesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Notes

    /**
     * @param NotesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getNotesList(?NotesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListNotesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param NoteBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postNote(NoteBody $body): Response
    {
        $this->body = $body;
        $request = new CreateNoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param NotesSearchBody $body
     * @param NotesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchNotes(NotesSearchBody $body, ?NotesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchNotesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $noteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getNote(int $noteId): Response
    {
        $this->pathParameters['note_id'] = $noteId;
        $request = new ShowNoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $noteId
     * @param NoteBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putNote(int $noteId, NoteBody $body): Response
    {
        $this->pathParameters['note_id'] = $noteId;
        $this->body = $body;
        $request = new EditNoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $noteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteNote(int $noteId): Response
    {
        $this->pathParameters['note_id'] = $noteId;
        $request = new DeleteNoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\PaymentType

    /**
     * @param PaymentTypesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getPaymentTypesList(?PaymentTypesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListPaymentTypesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param PaymentTypesSearchBody $body
     * @param PaymentTypesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchPaymentTypes(PaymentTypesSearchBody $body, ?PaymentTypesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchPaymentTypesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Tasks

    /**
     * @param TasksRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTasksList(?TasksRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTasksRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TaskBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postTask(TaskBody $body): Response
    {
        $this->body = $body;
        $request = new CreateTaskRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TasksSearchBody $body
     * @param TasksRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchTasks(TasksSearchBody $body, ?TasksRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchTasksRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $taskId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTask(int $taskId): Response
    {
        $this->pathParameters['task_id'] = $taskId;
        $request = new ShowTaskRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $taskId
     * @param TaskBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putTask(int $taskId, TaskBody $body): Response
    {
        $this->pathParameters['task_id'] = $taskId;
        $this->body = $body;
        $request = new EditTaskRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $taskId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteTask(int $taskId): Response
    {
        $this->pathParameters['task_id'] = $taskId;
        $request = new DeleteTaskRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TaskPrioritiesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTaskPrioritiesList(?TaskPrioritiesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTaskPrioritiesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TaskStatusesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTaskStatusesList(?TaskStatusesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTaskStatusesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Units

    /**
     * @param UnitsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getUnitsList(?UnitsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListUnitsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param UnitBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postUnit(UnitBody $body): Response
    {
        $this->body = $body;
        $request = new CreateUnitRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param UnitsSearchBody $body
     * @param UnitsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchUnits(UnitsSearchBody $body, ?UnitsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchUnitsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $unitId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getUnit(int $unitId): Response
    {
        $this->pathParameters['unit_id'] = $unitId;
        $request = new ShowUnitRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $unitId
     * @param UnitBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putUnit(int $unitId, UnitBody $body): Response
    {
        $this->pathParameters['unit_id'] = $unitId;
        $this->body = $body;
        $request = new EditUnitRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $unitId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteUnit(int $unitId): Response
    {
        $this->pathParameters['unit_id'] = $unitId;
        $request = new DeleteUnitRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Other\Users

    /**
     * @param UsersRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getUsersList(?UsersRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListUsersRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $userId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getUser(int $userId): Response
    {
        $this->pathParameters['user_id'] = $userId;
        $request = new ShowUserRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Projects
    // Projects\Projects

    /**
     * @param ProjectsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getProjectsList(?ProjectsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListProjectsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ProjectBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postProject(ProjectBody $body): Response
    {
        $this->body = $body;
        $request = new CreateProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ProjectsSearchBody $body
     * @param ProjectsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchProjects(ProjectsSearchBody $body, ?ProjectsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchProjectsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $projectId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getProject(int $projectId): Response
    {
        $this->pathParameters['project_id'] = $projectId;
        $request = new ShowProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $projectId
     * @param ProjectBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putProject(int $projectId, ProjectBody $body): Response
    {
        $this->pathParameters['project_id'] = $projectId;
        $this->body = $body;
        $request = new EditProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $projectId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteProject(int $projectId): Response
    {
        $this->pathParameters['project_id'] = $projectId;
        $request = new DeleteProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $projectId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postArchiveProject(int $projectId): Response
    {
        $this->pathParameters['project_id'] = $projectId;
        $request = new ArchiveProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $projectId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postUnarchiveProject(int $projectId): Response
    {
        $this->pathParameters['project_id'] = $projectId;
        $request = new UnarchiveProjectRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ProjectStatusesRequestQuery|null $query
     * @return Response
     */
    public function getProjectStatusesList(?ProjectStatusesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListProjectStatusRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param ProjectTypesRequestQuery|null $query
     * @return Response
     */
    public function getProjectTypesList(?ProjectTypesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListProjectTypesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Projects\Timesheets

    /**
     * @param TimesheetsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTimesheetsList(?TimesheetsRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTimesheetsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TimesheetBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postTimesheet(TimesheetBody $body): Response
    {
        $this->body = $body;
        $request = new CreateTimesheetRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TimesheetsSearchBody $body
     * @param TimesheetsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchTimesheets(TimesheetsSearchBody $body, ?TimesheetsRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchTimesheetsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $timesheetId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTimesheet(int $timesheetId): Response
    {
        $this->pathParameters['timesheet_id'] = $timesheetId;
        $request = new ShowTimesheetRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $timesheetId
     * @param TimesheetBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putTimesheet(int $timesheetId, TimesheetBody $body): Response
    {
        $this->pathParameters['timesheet_id'] = $timesheetId;
        $this->body = $body;
        $request = new EditTimesheetRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $timesheetId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteTimesheet(int $timesheetId): Response
    {
        $this->pathParameters['timesheet_id'] = $timesheetId;
        $request = new DeleteTimesheetRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param TimesheetStatusRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTimesheetStatusList(?TimesheetStatusRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListTimesheetStatusRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Projects\BusinessActivities

    /**
     * @param BusinessActivitiesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getBusinessActivitiesList(?BusinessActivitiesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListBusinessActivitiesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param BusinessActivityBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postBusinessActivity(BusinessActivityBody $body): Response
    {
        $this->body = $body;
        $request = new CreateBusinessActivityRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param BusinessActivitiesSearchBody $body
     * @param BusinessActivitiesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchBusinessActivities(BusinessActivitiesSearchBody $body, ?BusinessActivitiesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchBusinessActivitiesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Projects\CommunicationTypes

    /**
     * @param CommunicationTypesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCommunicationTypesList(?CommunicationTypesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListCommunicationTypesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param CommunicationTypesSearchBody $body
     * @param CommunicationTypesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchCommunicationTypes(CommunicationTypesSearchBody $body, ?CommunicationTypesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchCommunicationTypesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales
    // Sales\DocumentSettings

    /**
     * @param DocumentSettingsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getDocumentSettingsList(
        ?DocumentSettingsRequestQuery $query = null
    ): Response {
        $this->query = $query;
        $request = new ListDocumentSettingsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales\Comments

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param CommentsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCommentsList(
        string $kbDocumentType,
        int $documentId,
        ?CommentsRequestQuery $query = null
    ): Response {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->query = $query;
        $request = new ListCommentsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $documentId
     * @param CommentsRequestQuery|null $query
     * @return Response
     */
    public function getOfferCommentsList(int $documentId, ?CommentsRequestQuery $query = null): Response
    {
        return $this->getCommentsList(ListCommentsRequest::DOCUMENT_TYPE_OFFER, $documentId, $query);
    }

    /**
     * @param int $documentId
     * @param CommentsRequestQuery|null $query
     * @return Response
     */
    public function getOrderCommentsList(int $documentId, ?CommentsRequestQuery $query = null): Response
    {
        return $this->getCommentsList(ListCommentsRequest::DOCUMENT_TYPE_ORDER, $documentId, $query);
    }

    /**
     * @param int $documentId
     * @param CommentsRequestQuery|null $query
     * @return Response
     */
    public function getInvoiceCommentsList(int $documentId, ?CommentsRequestQuery $query = null): Response
    {
        return $this->getCommentsList(ListCommentsRequest::DOCUMENT_TYPE_INVOICE, $documentId, $query);
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param CommentBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postComment(string $kbDocumentType, int $documentId, CommentBody $body = null): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->body = $body;
        $request = new CreateCommentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $documentId
     * @param CommentBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postOfferComment(int $documentId, CommentBody $body = null): Response
    {
        return $this->postComment(CreateCommentRequest::DOCUMENT_TYPE_OFFER, $documentId, $body);
    }

    /**
     * @param int $documentId
     * @param CommentBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postOrderComment(int $documentId, CommentBody $body = null): Response
    {
        return $this->postComment(CreateCommentRequest::DOCUMENT_TYPE_ORDER, $documentId, $body);
    }

    /**
     * @param int $documentId
     * @param CommentBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postInvoiceComment(int $documentId, CommentBody $body = null): Response
    {
        return $this->postComment(CreateCommentRequest::DOCUMENT_TYPE_INVOICE, $documentId, $body);
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $commentId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getComment(string $kbDocumentType, int $documentId, int $commentId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['comment_id'] = $commentId;
        $request = new ShowCommentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $documentId
     * @param int $commentId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getOfferComment(int $documentId, int $commentId): Response
    {
        return $this->getComment(ShowCommentRequest::DOCUMENT_TYPE_OFFER, $documentId, $commentId);
    }

    /**
     * @param int $documentId
     * @param int $commentId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoiceComment(int $documentId, int $commentId): Response
    {
        return $this->getComment(ShowCommentRequest::DOCUMENT_TYPE_INVOICE, $documentId, $commentId);
    }

    /**
     * @param int $documentId
     * @param int $commentId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getOrderComment(int $documentId, int $commentId): Response
    {
        return $this->getComment(ShowCommentRequest::DOCUMENT_TYPE_ORDER, $documentId, $commentId);
    }

    // Sales\DefaultPositions

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param DefaultPositionsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getDefaultPositionsList(
        string $kbDocumentType,
        int $documentId,
        ?DefaultPositionsRequestQuery $query = null
    ): Response {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->query = $query;
        $request = new ListDefaultPositionsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param DefaultPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postDefaultPosition(string $kbDocumentType, int $documentId, DefaultPositionBody $body = null): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->body = $body;
        $request = new CreateDefaultPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getDefaultPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new ShowDefaultPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @param DefaultPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putDefaultPosition(string $kbDocumentType, int $documentId, int $positionId, DefaultPositionBody $body): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $this->body = $body;
        $request = new EditDefaultPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteDefaultPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new DeleteDefaultPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales\ItemPositions

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param ItemPositionsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getItemPositionsList(
        string $kbDocumentType,
        int $documentId,
        ?ItemPositionsRequestQuery $query = null
    ): Response {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->query = $query;
        $request = new ListItemPositionsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param ItemPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postItemPosition(string $kbDocumentType, int $documentId, ItemPositionBody $body = null): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->body = $body;
        $request = new CreateItemPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getItemPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new ShowItemPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @param ItemPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putItemPosition(string $kbDocumentType, int $documentId, int $positionId, ItemPositionBody $body): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $this->body = $body;
        $request = new EditItemPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteItemPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new DeleteItemPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales\TextPositions

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param TextPositionsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTextPositionsList(
        string $kbDocumentType,
        int $documentId,
        ?TextPositionsRequestQuery $query = null
    ): Response {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->query = $query;
        $request = new ListTextPositionsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param TextPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postTextPosition(string $kbDocumentType, int $documentId, TextPositionBody $body = null): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->body = $body;
        $request = new CreateTextPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getTextPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new ShowTextPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @param TextPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putTextPosition(string $kbDocumentType, int $documentId, int $positionId, TextPositionBody $body): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $this->body = $body;
        $request = new EditTextPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteTextPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new DeleteTextPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales\SubtotalPositions

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param SubtotalPositionsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getSubtotalPositionsList(
        string $kbDocumentType,
        int $documentId,
        ?SubtotalPositionsRequestQuery $query = null
    ): Response {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->query = $query;
        $request = new ListSubtotalPositionsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param SubtotalPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSubtotalPosition(string $kbDocumentType, int $documentId, SubtotalPositionBody $body = null): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->body = $body;
        $request = new CreateSubtotalPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getSubtotalPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new ShowSubtotalPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @param SubtotalPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putSubtotalPosition(string $kbDocumentType, int $documentId, int $positionId, SubtotalPositionBody $body): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $this->body = $body;
        $request = new EditSubtotalPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteSubtotalPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new DeleteSubtotalPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales\DiscountPositions

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param DiscountPositionsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getDiscountPositionsList(
        string $kbDocumentType,
        int $documentId,
        ?DiscountPositionsRequestQuery $query = null
    ): Response {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->query = $query;
        $request = new ListDiscountPositionsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param DiscountPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postDiscountPosition(string $kbDocumentType, int $documentId, DiscountPositionBody $body = null): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->body = $body;
        $request = new CreateDiscountPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getDiscountPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new ShowDiscountPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @param DiscountPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putDiscountPosition(string $kbDocumentType, int $documentId, int $positionId, DiscountPositionBody $body): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $this->body = $body;
        $request = new EditDiscountPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteDiscountPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new DeleteDiscountPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales\PagebreakPositions

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param PagebreakPositionsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getPagebreakPositionsList(
        string $kbDocumentType,
        int $documentId,
        ?PagebreakPositionsRequestQuery $query = null
    ): Response {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->query = $query;
        $request = new ListPagebreakPositionsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param PagebreakPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postPagebreakPosition(string $kbDocumentType, int $documentId, PagebreakPositionBody $body = null): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->body = $body;
        $request = new CreatePagebreakPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getPagebreakPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new ShowPagebreakPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @param PagebreakPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putPagebreakPosition(string $kbDocumentType, int $documentId, int $positionId, PagebreakPositionBody $body): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $this->body = $body;
        $request = new EditPagebreakPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deletePagebreakPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new DeletePagebreakPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales\SubpositionPositions

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param SubpositionPositionsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getSubpositionPositionsList(
        string $kbDocumentType,
        int $documentId,
        ?SubpositionPositionsRequestQuery $query = null
    ): Response {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->query = $query;
        $request = new ListSubpositionPositionsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param SubpositionPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSubpositionPosition(string $kbDocumentType, int $documentId, SubpositionPositionBody $body = null): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->body = $body;
        $request = new CreateSubpositionPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getSubpositionPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new ShowSubpositionPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @param SubpositionPositionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putSubpositionPosition(string $kbDocumentType, int $documentId, int $positionId, SubpositionPositionBody $body): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $this->body = $body;
        $request = new EditSubpositionPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param string $kbDocumentType
     * @param int $documentId
     * @param int $positionId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteSubpositionPosition(string $kbDocumentType, int $documentId, int $positionId): Response
    {
        $this->pathParameters['kb_document_type'] = $kbDocumentType;
        $this->pathParameters['document_id'] = $documentId;
        $this->pathParameters['position_id'] = $positionId;
        $request = new DeleteSubpositionPositionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales\Quotes

    /**
     * @param QuotesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getQuotesList(?QuotesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListQuotesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getQuote(int $quoteId): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $request = new ShowQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getQuotePdf(int $quoteId): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $request = new ShowQuotePDFRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param QuoteBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postQuote(QuoteBody $body = null): Response
    {
        $this->body = $body;
        $request = new CreateQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param QuotesSearchBody $body
     * @param QuotesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchQuotes(QuotesSearchBody $body, ?QuotesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchQuotesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @param QuoteBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putQuote(int $quoteId, QuoteBody $body): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $this->body = $body;
        $request = new EditQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteQuote(int $quoteId): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $request = new DeleteQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postIssueQuote(int $quoteId): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $request = new IssueQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postRevertIssueQuote(int $quoteId): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $request = new RevertIssueQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postAcceptQuote(int $quoteId): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $request = new AcceptQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postDeclineQuote(int $quoteId): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $request = new DeclineQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postReissueQuote(int $quoteId): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $request = new ReissueQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postMarkAsSentQuote(int $quoteId): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $request = new MarkAsSentQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @param SendQuoteBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSendQuote(int $quoteId, SendQuoteBody $body): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $this->body = $body;
        $request = new SendQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @param CopyQuoteBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCopyQuote(int $quoteId, CopyQuoteBody $body): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $this->body = $body;
        $request = new CopyQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @param PositionsArrayBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCreateOrderFromQuote(int $quoteId, PositionsArrayBody $body): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $this->body = $body;
        $request = new CreateOrderFromQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $quoteId
     * @param PositionsArrayBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCreateInvoiceFromQuote(int $quoteId, PositionsArrayBody $body): Response
    {
        $this->pathParameters['quote_id'] = $quoteId;
        $this->body = $body;
        $request = new CreateInvoiceFromQuoteRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales\Orders

    /**
     * @param OrdersRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getOrdersList(?OrdersRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListOrdersRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $orderId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getOrder(int $orderId): Response
    {
        $this->pathParameters['order_id'] = $orderId;
        $request = new ShowOrderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $orderId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getOrderPdf(int $orderId): Response
    {
        $this->pathParameters['order_id'] = $orderId;
        $request = new ShowOrderPDFRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param OrderBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postOrder(OrderBody $body = null): Response
    {
        $this->body = $body;
        $request = new CreateOrderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param OrdersSearchBody $body
     * @param OrdersRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchOrders(OrdersSearchBody $body, ?OrdersRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchOrdersRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $orderId
     * @param OrderBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putOrder(int $orderId, OrderBody $body): Response
    {
        $this->pathParameters['order_id'] = $orderId;
        $this->body = $body;
        $request = new EditOrderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $orderId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteOrder(int $orderId): Response
    {
        $this->pathParameters['order_id'] = $orderId;
        $request = new DeleteOrderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $orderId
     * @param PositionsArrayBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCreateDeliveryFromOrder(int $orderId, PositionsArrayBody $body): Response
    {
        $this->pathParameters['order_id'] = $orderId;
        $this->body = $body;
        $request = new CreateDeliveryFromOrderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $orderId
     * @param PositionsArrayBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCreateInvoiceFromOrder(int $orderId, PositionsArrayBody $body): Response
    {
        $this->pathParameters['order_id'] = $orderId;
        $this->body = $body;
        $request = new CreateInvoiceFromOrderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $orderId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getOrderRepetition(int $orderId): Response
    {
        $this->pathParameters['order_id'] = $orderId;
        $request = new ShowOrderRepetitionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $orderId
     * @param OrderRepetitionBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postOrderRepetition(int $orderId, OrderRepetitionBody $body): Response
    {
        $this->pathParameters['order_id'] = $orderId;
        $this->body = $body;
        $request = new EditOrderRepetitionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $orderId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteOrderRepetition(int $orderId): Response
    {
        $this->pathParameters['order_id'] = $orderId;
        $request = new DeleteOrderRepetitionRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales\Deliveries

    /**
     * @param DeliveriesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getDeliveriesList(?DeliveriesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListDeliveriesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $deliveryId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getDelivery(int $deliveryId): Response
    {
        $this->pathParameters['delivery_id'] = $deliveryId;
        $request = new ShowDeliveryRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $deliveryId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postIssueDelivery(int $deliveryId): Response
    {
        $this->pathParameters['delivery_id'] = $deliveryId;
        $request = new IssueDeliveryRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    // Sales\Invoices

    /**
     * @param InvoicesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoicesList(?InvoicesRequestQuery $query = null): Response
    {
        $this->query = $query;
        $request = new ListInvoicesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoice(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new ShowInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoicePdf(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new ShowInvoicePDFRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param InvoiceBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postInvoice(InvoiceBody $body = null): Response
    {
        $this->body = $body;
        $request = new CreateInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param InvoicesSearchBody $body
     * @param InvoicesRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchInvoices(InvoicesSearchBody $body, ?InvoicesRequestQuery $query = null): Response
    {
        $this->body = $body;
        $this->query = $query;
        $request = new SearchInvoicesRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param InvoiceBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function putInvoice(int $invoiceId, InvoiceBody $body): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->body = $body;
        $request = new EditInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteInvoice(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new DeleteInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param CopyInvoiceBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCopyInvoice(int $invoiceId, CopyInvoiceBody $body): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->body = $body;
        $request = new CopyInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postIssueInvoice(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new IssueInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postRevertIssueInvoice(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new RevertIssueInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postCancelInvoice(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new CancelInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postMarkAsSentInvoice(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new MarkAsSentInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param SendInvoiceBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSendInvoice(int $invoiceId, SendInvoiceBody $body): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->body = $body;
        $request = new SendInvoiceRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param InvoicePaymentsRequestQuery|null $query
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoicePaymentsList(int $invoiceId, ?InvoicePaymentsRequestQuery $query = null): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->query = $query;
        $request = new ListInvoicePaymentsRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param int $paymentId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoicePayment(int $invoiceId, int $paymentId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->pathParameters['payment_id'] = $paymentId;
        $request = new ShowInvoicePaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param InvoicePaymentBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postInvoicePayment(int $invoiceId, InvoicePaymentBody $body = null): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->body = $body;
        $request = new CreateInvoicePaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param int $paymentId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteInvoicePayment(int $invoiceId, int $paymentId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->pathParameters['payment_id'] = $paymentId;
        $request = new DeleteInvoicePaymentRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoiceRemindersList(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new ListInvoiceRemindersRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postInvoiceReminder(int $invoiceId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $request = new CreateInvoiceReminderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param InvoiceRemindersSearchBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSearchInvoiceReminders(int $invoiceId, InvoiceRemindersSearchBody $body): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->body = $body;
        $request = new SearchInvoiceRemindersRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param int $reminderId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoiceReminder(int $invoiceId, int $reminderId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->pathParameters['reminder_id'] = $reminderId;
        $request = new ShowInvoiceReminderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param int $reminderId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function deleteInvoiceReminder(int $invoiceId, int $reminderId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->pathParameters['reminder_id'] = $reminderId;
        $request = new DeleteInvoiceReminderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param int $reminderId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postMarkAsSentInvoiceReminder(int $invoiceId, int $reminderId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->pathParameters['reminder_id'] = $reminderId;
        $request = new MarkAsSentInvoiceReminderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param int $reminderId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postMarkAsUnsentInvoiceReminder(int $invoiceId, int $reminderId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->pathParameters['reminder_id'] = $reminderId;
        $request = new MarkAsUnsentInvoiceReminderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param int $reminderId
     * @param SendInvoiceReminderBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postSendInvoiceReminder(int $invoiceId, int $reminderId, SendInvoiceReminderBody $body): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->pathParameters['reminder_id'] = $reminderId;
        $this->body = $body;
        $request = new SendInvoiceReminderRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @param int $invoiceId
     * @param int $reminderId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getInvoiceReminderPdf(int $invoiceId, int $reminderId): Response
    {
        $this->pathParameters['invoice_id'] = $invoiceId;
        $this->pathParameters['reminder_id'] = $reminderId;
        $request = new ShowInvoiceReminderPDFRequest(...$this->getRequestParameters());
        return $request->execute();
    }

    /**
     * @return array
     */
    private function getRequestParameters(): array
    {
        return [
            $this->client,
            $this->token,
            $this->logger,
            $this->pathParameters,
            $this->query,
            $this->body,
        ];
    }
}
