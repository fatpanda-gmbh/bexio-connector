<?php

namespace Fatpanda\BexioConnector\Tests;

use Fatpanda\BexioConnector\BexioConnector;
use Fatpanda\BexioConnector\Container\Banking\BankAccount;
use Fatpanda\BexioConnector\Container\Contacts\AdditionalAddress;
use Fatpanda\BexioConnector\Container\Contacts\Contact;
use Fatpanda\BexioConnector\Container\Contacts\ContactGroup;
use Fatpanda\BexioConnector\Container\Contacts\ContactRelation;
use Fatpanda\BexioConnector\Container\Contacts\ContactSector;
use Fatpanda\BexioConnector\Container\Contacts\Salutation;
use Fatpanda\BexioConnector\Container\Contacts\Title;
use Fatpanda\BexioConnector\Container\Other\Company;
use Fatpanda\BexioConnector\Container\Other\Country;
use Fatpanda\BexioConnector\Container\Other\Language;
use Fatpanda\BexioConnector\Container\Other\Note;
use Fatpanda\BexioConnector\Container\Other\PaymentType;
use Fatpanda\BexioConnector\Container\Other\Task;
use Fatpanda\BexioConnector\Container\Other\TaskPriority;
use Fatpanda\BexioConnector\Container\Other\TaskStatus;
use Fatpanda\BexioConnector\Container\Other\Unit;
use Fatpanda\BexioConnector\Container\Other\User;
use Fatpanda\BexioConnector\Container\Projects\BusinessActivity;
use Fatpanda\BexioConnector\Container\Projects\CommunicationType;
use Fatpanda\BexioConnector\Container\Projects\Project;
use Fatpanda\BexioConnector\Container\Projects\ProjectStatus;
use Fatpanda\BexioConnector\Container\Projects\ProjectType;
use Fatpanda\BexioConnector\Container\Projects\Timesheet;
use Fatpanda\BexioConnector\Container\Sales\Comment;
use Fatpanda\BexioConnector\Container\Sales\DefaultPosition;
use Fatpanda\BexioConnector\Container\Sales\Delivery;
use Fatpanda\BexioConnector\Container\Sales\DiscountPosition;
use Fatpanda\BexioConnector\Container\Sales\DocumentSetting;
use Fatpanda\BexioConnector\Container\Sales\File;
use Fatpanda\BexioConnector\Container\Sales\Invoice;
use Fatpanda\BexioConnector\Container\Projects\TimesheetStatus;
use Fatpanda\BexioConnector\Container\Sales\InvoicePayment;
use Fatpanda\BexioConnector\Container\Sales\InvoiceReminder;
use Fatpanda\BexioConnector\Container\Sales\ItemPosition;
use Fatpanda\BexioConnector\Container\Sales\Order;
use Fatpanda\BexioConnector\Container\Sales\OrderRepetition;
use Fatpanda\BexioConnector\Container\Sales\PagebreakPosition;
use Fatpanda\BexioConnector\Container\Sales\Quote;
use Fatpanda\BexioConnector\Container\Sales\SubpositionPosition;
use Fatpanda\BexioConnector\Container\Sales\SubtotalPosition;
use Fatpanda\BexioConnector\Container\Sales\TextPosition;
use Fatpanda\BexioConnector\Container\Success;
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
use Fatpanda\BexioConnector\RequestQuery\Banking\BankAccountsRequestQuery;
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
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use PHPUnit\Framework\TestCase;

class BexioConnectorTest extends TestCase
{
    protected const REQUEST_PARAM_INT = 1;
    protected const REQUEST_PARAM_STRING = 'string';
    protected const RESPONSE_STATUS = 200;
    protected const ERROR_MESSAGE = 'Error message';

    public function testBankAccount()
    {
        $responseBodyClass = BankAccount::class;
        $query = new BankAccountsRequestQuery();

        $this->runListRequest('getBankAccountsList', $responseBodyClass, [], $query);
        $this->runRequest('getBankAccount', $responseBodyClass, [self::REQUEST_PARAM_INT]);
    }

    public function testAdditionalAddress()
    {
        $responseBodyClass = AdditionalAddress::class;
        $query = new AdditionalAddressesRequestQuery();
        $body = new AdditionalAddressBody();
        $searchBody = new AdditionalAddressesSearchBody();

        $this->runListRequest('getAdditionalAddressesList', $responseBodyClass, [self::REQUEST_PARAM_INT], $query);
        $this->runRequest('postAdditionalAddress', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runListRequest('postSearchAdditionalAddresses', $responseBodyClass, [self::REQUEST_PARAM_INT, $searchBody], $query);
        $this->runRequest('getAdditionalAddress', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT]);
        $this->runRequest('putAdditionalAddress', $responseBodyClass, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteAdditionalAddress', Success::class, [self::REQUEST_PARAM_INT, self::REQUEST_PARAM_INT]);
    }

    public function testContactGroup()
    {
        $responseBodyClass = ContactGroup::class;
        $query = new ContactGroupsRequestQuery();
        $body = new ContactGroupBody();
        $searchBody = new ContactGroupsSearchBody();

        $this->runListRequest('getContactGroupsList', $responseBodyClass, [], $query);
        $this->runRequest('postContactGroup', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchContactGroups', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getContactGroup', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putContactGroup', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteContactGroup', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testContactRelation()
    {
        $responseBodyClass = ContactRelation::class;
        $query = new ContactRelationsRequestQuery();
        $body = new ContactRelationBody();
        $searchBody = new ContactRelationsSearchBody();

        $this->runListRequest('getContactRelationsList', $responseBodyClass, [], $query);
        $this->runRequest('postContactRelation', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchContactRelations', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getContactRelation', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putContactRelation', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteContactRelation', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testContactSector()
    {
        $responseBodyClass = ContactSector::class;
        $query = new ContactSectorsRequestQuery();
        $body = new ContactSectorsSearchBody();

        $this->runListRequest('getContactSectorsList', $responseBodyClass, [], $query);
        $this->runListRequest('postSearchContactSectors', $responseBodyClass, [$body], $query);
    }

    public function testContact()
    {
        $responseBodyClass = Contact::class;
        $query = new ContactsRequestQuery();
        $body = new ContactBody();
        $searchBody = new ContactsSearchBody();
        $arrayBody = new ContactArrayBody();
        $item = $arrayBody->createItem();
        $item->setContactTypeId($item::CONTACT_TYPE_COMPANY);

        $this->runListRequest('getContactsList', $responseBodyClass, [], $query);
        $this->runRequest('postContact', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchContacts', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getContact', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putContact', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteContact', Success::class, [self::REQUEST_PARAM_INT]);
        $this->runListRequest('postContactsBulk', $responseBodyClass, [$arrayBody]);
    }

    public function testSalutation()
    {
        $responseBodyClass = Salutation::class;
        $query = new SalutationsRequestQuery();
        $body = new SalutationBody();
        $searchBody = new SalutationsSearchBody();

        $this->runListRequest('getSalutationsList', $responseBodyClass, [], $query);
        $this->runRequest('postSalutation', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchSalutations', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getSalutation', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putSalutation', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteSalutation', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testTitle()
    {
        $responseBodyClass = Title::class;
        $query = new TitlesRequestQuery();
        $body = new TitleBody();
        $searchBody = new TitlesSearchBody();

        $this->runListRequest('getTitlesList', $responseBodyClass, [], $query);
        $this->runRequest('postTitle', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchTitles', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getTitle', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putTitle', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteTitle', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testProject()
    {
        $responseBodyClass = Project::class;
        $query = new ProjectsRequestQuery();
        $body = new ProjectBody();
        $searchBody = new ProjectsSearchBody();

        $this->runListRequest('getProjectsList', $responseBodyClass, [], $query);
        $this->runRequest('postProject', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchProjects', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getProject', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putProject', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $successBodyClass = Success::class;
        $this->runRequest('deleteProject', $successBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postArchiveProject', $successBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postUnarchiveProject', $successBodyClass, [self::REQUEST_PARAM_INT]);

        $responseBodyClass = ProjectStatus::class;
        $query = new ProjectStatusesRequestQuery();
        $this->runListRequest('getProjectStatusesList', $responseBodyClass, [], $query);

        $responseBodyClass = ProjectType::class;
        $query = new ProjectTypesRequestQuery();
        $this->runListRequest('getProjectTypesList', $responseBodyClass, [], $query);
    }

    public function testTimesheet()
    {
        $responseBodyClass = Timesheet::class;
        $query = new TimesheetsRequestQuery();
        $body = new TimesheetBody();
        $searchBody = new TimesheetsSearchBody();

        $this->runListRequest('getTimesheetsList', $responseBodyClass, [], $query);
        $this->runRequest('postTimesheet', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchTimesheets', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getTimesheet', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putTimesheet', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteTimesheet', Success::class, [self::REQUEST_PARAM_INT]);

        $query = new TimesheetStatusRequestQuery();
        $this->runListRequest('getTimesheetStatusList', TimesheetStatus::class, [], $query);
    }

    public function testBusinessActivity()
    {
        $responseBodyClass = BusinessActivity::class;
        $query = new BusinessActivitiesRequestQuery();
        $body = new BusinessActivityBody();
        $searchBody = new BusinessActivitiesSearchBody();

        $this->runListRequest('getBusinessActivitiesList', $responseBodyClass, [], $query);
        $this->runRequest('postBusinessActivity', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchBusinessActivities', $responseBodyClass, [$searchBody], $query);
    }

    public function testCommunicationType()
    {
        $responseBodyClass = CommunicationType::class;
        $query = new CommunicationTypesRequestQuery();
        $searchBody = new CommunicationTypesSearchBody();

        $this->runListRequest('getCommunicationTypesList', $responseBodyClass, [], $query);
        $this->runListRequest('postSearchCommunicationTypes', $responseBodyClass, [$searchBody], $query);
    }

    public function testCompany()
    {
        $responseBodyClass = Company::class;

        $this->runListRequest('getCompaniesList', $responseBodyClass);
        $this->runRequest('getCompany', $responseBodyClass, [self::REQUEST_PARAM_INT]);
    }

    public function testCountry()
    {
        $responseBodyClass = Country::class;
        $query = new CountriesRequestQuery();
        $body = new CountryBody();
        $searchBody = new CountriesSearchBody();

        $this->runListRequest('getCountriesList', $responseBodyClass, [], $query);
        $this->runRequest('postCountry', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchCountries', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getCountry', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putCountry', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteCountry', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testLanguage()
    {
        $responseBodyClass = Language::class;
        $query = new LanguagesRequestQuery();
        $searchBody = new LanguagesSearchBody();

        $this->runListRequest('getLanguagesList', $responseBodyClass, [], $query);
        $this->runListRequest('postSearchLanguages', $responseBodyClass, [$searchBody], $query);
    }

    public function testNote()
    {
        $responseBodyClass = Note::class;
        $query = new NotesRequestQuery();
        $body = new NoteBody();
        $searchBody = new NotesSearchBody();

        $this->runListRequest('getNotesList', $responseBodyClass, [], $query);
        $this->runRequest('postNote', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchNotes', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getNote', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putNote', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteNote', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testPaymentType()
    {
        $responseBodyClass = PaymentType::class;
        $query = new PaymentTypesRequestQuery();
        $searchBody = new PaymentTypesSearchBody();

        $this->runListRequest('getPaymentTypesList', $responseBodyClass, [], $query);
        $this->runListRequest('postSearchPaymentTypes', $responseBodyClass, [$searchBody], $query);
    }

    public function testTask()
    {
        $responseBodyClass = Task::class;
        $query = new TasksRequestQuery();
        $body = new TaskBody();
        $searchBody = new TasksSearchBody();

        $this->runListRequest('getTasksList', $responseBodyClass, [], $query);
        $this->runRequest('postTask', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchTasks', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getTask', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putTask', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteTask', Success::class, [self::REQUEST_PARAM_INT]);

        $query = new TaskPrioritiesRequestQuery();
        $this->runListRequest('getTaskPrioritiesList', TaskPriority::class, [], $query);

        $query = new TaskStatusesRequestQuery();
        $this->runListRequest('getTaskStatusesList', TaskStatus::class, [], $query);
    }

    public function testUnit()
    {
        $responseBodyClass = Unit::class;
        $query = new UnitsRequestQuery();
        $body = new UnitBody();
        $searchBody = new UnitsSearchBody();

        $this->runListRequest('getUnitsList', $responseBodyClass, [], $query);
        $this->runRequest('postUnit', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchUnits', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getUnit', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putUnit', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteUnit', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testUser()
    {
        $responseBodyClass = User::class;
        $query = new UsersRequestQuery();

        $this->runListRequest('getUsersList', $responseBodyClass, [], $query);
        $this->runRequest('getUser', $responseBodyClass, [self::REQUEST_PARAM_INT]);
    }

    public function testDefaultPosition()
    {
        $responseBodyClass = DefaultPosition::class;
        $query = new DefaultPositionsRequestQuery();
        $body = new DefaultPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getDefaultPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postDefaultPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getDefaultPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putDefaultPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteDefaultPosition', Success::class, $parameters);
    }

    public function testItemPosition()
    {
        $responseBodyClass = ItemPosition::class;
        $query = new ItemPositionsRequestQuery();
        $body = new ItemPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getItemPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postItemPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getItemPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putItemPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteItemPosition', Success::class, $parameters);
    }

    public function testTextPosition()
    {
        $responseBodyClass = TextPosition::class;
        $query = new TextPositionsRequestQuery();
        $body = new TextPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getTextPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postTextPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getTextPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putTextPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteTextPosition', Success::class, $parameters);
    }

    public function testSubtotalPosition()
    {
        $responseBodyClass = SubtotalPosition::class;
        $query = new SubtotalPositionsRequestQuery();
        $body = new SubtotalPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getSubtotalPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postSubtotalPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getSubtotalPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putSubtotalPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteSubtotalPosition', Success::class, $parameters);
    }

    public function testDiscountPosition()
    {
        $responseBodyClass = DiscountPosition::class;
        $query = new DiscountPositionsRequestQuery();
        $body = new DiscountPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getDiscountPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postDiscountPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getDiscountPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putDiscountPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteDiscountPosition', Success::class, $parameters);
    }

    public function testPagebreakPosition()
    {
        $responseBodyClass = PagebreakPosition::class;
        $query = new PagebreakPositionsRequestQuery();
        $body = new PagebreakPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getPagebreakPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postPagebreakPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getPagebreakPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putPagebreakPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deletePagebreakPosition', Success::class, $parameters);
    }

    public function testSubpositionPosition()
    {
        $responseBodyClass = SubpositionPosition::class;
        $query = new SubpositionPositionsRequestQuery();
        $body = new SubpositionPositionBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getSubpositionPositionsList', $responseBodyClass, $parameters, $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postSubpositionPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getSubpositionPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('putSubpositionPosition', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('deleteSubpositionPosition', Success::class, $parameters);
    }

    public function testDocumentSetting()
    {
        $responseBodyClass = DocumentSetting::class;
        $query = new DocumentSettingsRequestQuery();

        $this->runListRequest('getDocumentSettingsList', $responseBodyClass, [], $query);
    }

    public function testComment()
    {
        $responseBodyClass = Comment::class;
        $query = new CommentsRequestQuery();
        $body = new CommentBody();

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
        ];
        $this->runListRequest('getCommentsList', $responseBodyClass, $parameters, $query);

        $this->runListRequest('getOfferCommentsList', $responseBodyClass, [self::REQUEST_PARAM_INT], $query);
        $this->runListRequest('getOrderCommentsList', $responseBodyClass, [self::REQUEST_PARAM_INT], $query);
        $this->runListRequest('getInvoiceCommentsList', $responseBodyClass, [self::REQUEST_PARAM_INT], $query);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            $body,
        ];
        $this->runRequest('postComment', $responseBodyClass, $parameters);

        $this->runRequest('postOfferComment', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('postOrderComment', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('postInvoiceComment', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $parameters = [
            self::REQUEST_PARAM_STRING,
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getComment', $responseBodyClass, $parameters);

        $parameters = [
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getOfferComment', $responseBodyClass, $parameters);
        $this->runRequest('getInvoiceComment', $responseBodyClass, $parameters);
        $this->runRequest('getOrderComment', $responseBodyClass, $parameters);
    }

    public function testQuote()
    {
        $responseBodyClass = Quote::class;
        $responseBodySuccessClass = Success::class;
        $query = new QuotesRequestQuery();
        $body = new QuoteBody();
        $searchBody = new QuotesSearchBody();

        $this->runListRequest('getQuotesList', $responseBodyClass, [], $query);
        $this->runRequest('postQuote', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchQuotes', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getQuote', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('getQuotePdf', File::class, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putQuote', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postIssueQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postRevertIssueQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postAcceptQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postDeclineQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postReissueQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postMarkAsSentQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);

        $body = new CopyQuoteBody();
        $this->runRequest('postCopyQuote', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $body = new SendQuoteBody();
        $this->runRequest('postSendQuote', $responseBodySuccessClass, [self::REQUEST_PARAM_INT, $body]);

        $body = new PositionsArrayBody();
        $item = $body->createItem();
        $item->setId(self::REQUEST_PARAM_INT)
            ->setAmount(self::REQUEST_PARAM_INT)
            ->setType($item::POSITION_TYPE_ARTICLE)
        ;
        $this->runRequest('postCreateOrderFromQuote', Order::class, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('postCreateInvoiceFromQuote', Invoice::class, [self::REQUEST_PARAM_INT, $body]);
    }

    public function testOrder()
    {
        $responseBodyClass = Order::class;
        $responseBodySuccessClass = Success::class;
        $query = new OrdersRequestQuery();
        $body = new OrderBody();
        $searchBody = new OrdersSearchBody();

        $this->runListRequest('getOrdersList', $responseBodyClass, [], $query);
        $this->runRequest('postOrder', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchOrders', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getOrder', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('getOrderPdf', File::class, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putOrder', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteOrder', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);

        $body = new PositionsArrayBody();
        $item = $body->createItem();
        $item->setId(self::REQUEST_PARAM_INT)
            ->setAmount(self::REQUEST_PARAM_INT)
            ->setType($item::POSITION_TYPE_ARTICLE)
        ;
        $this->runRequest('postCreateDeliveryFromOrder', Delivery::class, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('postCreateInvoiceFromOrder', Invoice::class, [self::REQUEST_PARAM_INT, $body]);

        $responseBodyClass = OrderRepetition::class;
        $body = new OrderRepetitionBody();
        $this->runRequest('getOrderRepetition', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postOrderRepetition', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteOrderRepetition', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
    }

    public function testDelivery()
    {
        $responseBodyClass = Delivery::class;
        $query = new DeliveriesRequestQuery();

        $this->runListRequest('getDeliveriesList', $responseBodyClass, [], $query);
        $this->runRequest('getDelivery', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postIssueDelivery', Success::class, [self::REQUEST_PARAM_INT]);
    }

    public function testInvoice()
    {
        $responseBodyClass = Invoice::class;
        $responseBodySuccessClass = Success::class;
        $query = new InvoicesRequestQuery();
        $body = new InvoiceBody();
        $searchBody = new InvoicesSearchBody();

        $this->runListRequest('getInvoicesList', $responseBodyClass, [], $query);
        $this->runRequest('postInvoice', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchInvoices', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getInvoice', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('getInvoicePdf', File::class, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putInvoice', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postIssueInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postRevertIssueInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postCancelInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postMarkAsSentInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT]);

        $body = new CopyInvoiceBody();
        $this->runRequest('postCopyInvoice', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $body = new SendInvoiceBody();
        $this->runRequest('postSendInvoice', $responseBodySuccessClass, [self::REQUEST_PARAM_INT, $body]);

        $responseBodyClass = InvoicePayment::class;
        $query = new InvoicePaymentsRequestQuery();
        $body = new InvoicePaymentBody();
        $this->runListRequest('getInvoicePaymentsList', $responseBodyClass, [self::REQUEST_PARAM_INT], $query);
        $this->runRequest('postInvoicePayment', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);

        $parameters = [
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getInvoicePayment', $responseBodyClass, $parameters);
        $this->runRequest('deleteInvoicePayment', $responseBodySuccessClass, $parameters);

        $responseBodyClass = InvoiceReminder::class;
        $searchBody = new InvoiceRemindersSearchBody();
        $this->runListRequest('getInvoiceRemindersList', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('postInvoiceReminder', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runListRequest('postSearchInvoiceReminders', $responseBodyClass, [self::REQUEST_PARAM_INT, $searchBody]);

        $parameters = [
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
        ];
        $this->runRequest('getInvoiceReminder', $responseBodyClass, $parameters);
        $this->runRequest('deleteInvoiceReminder', $responseBodySuccessClass, $parameters);
        $this->runRequest('postMarkAsSentInvoiceReminder', $responseBodySuccessClass, $parameters);
        $this->runRequest('postMarkAsUnsentInvoiceReminder', $responseBodySuccessClass, $parameters);
        $this->runRequest('getInvoiceReminderPdf', File::class, $parameters);

        $parameters = [
            self::REQUEST_PARAM_INT,
            self::REQUEST_PARAM_INT,
            new SendInvoiceReminderBody(),
        ];
        $this->runRequest('postSendInvoiceReminder', $responseBodySuccessClass, $parameters);
    }

    protected function getConnector(array $responses = []): BexioConnector
    {
        $connector = new BexioConnector();
        $connector->setClient($this->getClient($responses));

        return $connector;
    }

    protected function getClient(array $responses = []): Client
    {
        if (empty($responses)) {
            $responses = [
                new Response(200, [], '[{}]'),
                new RequestException(self::ERROR_MESSAGE, new Request('GET', 'test'))
            ];
        }
        $mock = new MockHandler($responses);

        $handlerStack = HandlerStack::create($mock);

        return new Client(['handler' => $handlerStack]);
    }

    protected function getArrayBodyResponse(?int $status = null): Response
    {
        if (!isset($status)) {
            $status = self::RESPONSE_STATUS;
        }

        return new Response($status, [], '[{}]');
    }

    protected function getObjectBodyResponse(?int $status = null): Response
    {
        if (!isset($status)) {
            $status = self::RESPONSE_STATUS;
        }

        return new Response($status, [], '{}');
    }

    protected function getRequestExceptionResponse(?string $message = null): RequestException
    {
        if (!isset($message)) {
            $message = self::ERROR_MESSAGE;
        }

        return new RequestException($message, new Request('GET', 'test'));
    }

    /**
     * @param string $testedMethod
     * @param string $responseBodyClass
     * @param array $parameters
     * @param RequestQueryInterface|null $query
     */
    protected function runListRequest(
        string $testedMethod,
        string $responseBodyClass,
        array $parameters = [],
        ?RequestQueryInterface $query = null
    ): void {
        $connector = $this->getConnector([
            $this->getArrayBodyResponse(),
            $this->getRequestExceptionResponse(),
        ]);

        $response = $connector->$testedMethod(...$parameters);
        $this->assertTrue($response->isSuccessResponse());
        $this->assertInstanceOf(SuccessResponse::class, $response);
        $body = $response->getBody();
        $this->assertTrue(is_array($body));
        $this->assertInstanceOf($responseBodyClass, $body[0]);

        $response = $connector->$testedMethod(...$parameters);
        $this->assertFalse($response->isSuccessResponse());
        $this->assertInstanceOf(ErrorResponse::class, $response);
        $this->assertEquals(self::ERROR_MESSAGE, $response->getMessage());

        if (isset($query)) {
            $connector = $this->getConnector([
                $this->getArrayBodyResponse(),
            ]);

            $response = $connector->$testedMethod(...array_merge($parameters, [$query]));
            $this->assertTrue($response->isSuccessResponse());
        }
    }

    /**
     * @param string $testedMethod
     * @param string $responseBodyClass
     * @param array $parameters
     */
    protected function runRequest(string $testedMethod, string $responseBodyClass, array $parameters = []): void
    {
        $connector = $this->getConnector([
            $this->getObjectBodyResponse(),
            $this->getRequestExceptionResponse(),
        ]);

        $response = $connector->$testedMethod(...$parameters);
        $this->assertTrue($response->isSuccessResponse());
        $this->assertInstanceOf(SuccessResponse::class, $response);
        $body = $response->getBody();
        $this->assertInstanceOf($responseBodyClass, $body);

        $response = $connector->$testedMethod(...$parameters);
        $this->assertFalse($response->isSuccessResponse());
        $this->assertInstanceOf(ErrorResponse::class, $response);
        $this->assertEquals(self::ERROR_MESSAGE, $response->getMessage());
    }
}
