<?php

namespace Fatpanda\BexioConnector\Tests;

use Fatpanda\BexioConnector\BexioConnector;
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
use Fatpanda\BexioConnector\Container\Sales\File;
use Fatpanda\BexioConnector\Container\Sales\Invoice;
use Fatpanda\BexioConnector\Container\Projects\TimesheetStatus;
use Fatpanda\BexioConnector\Container\Success;
use Fatpanda\BexioConnector\RequestBody\Contacts\AdditionalAddresses\AdditionalAddressBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\AdditionalAddresses\AdditionalAddressesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactGroups\ContactGroupBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactGroups\ContactGroupsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactRelations\ContactRelationBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactRelations\ContactRelationsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Contacts\ContactBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Contacts\ContactBulkBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Contacts\ContactsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Salutations\SalutationBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Salutations\SalutationsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\ContactSectors\ContactSectorsSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Titles\TitlesSearchBody;
use Fatpanda\BexioConnector\RequestBody\Contacts\Titles\TitleBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoiceBody;
use Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoicesSearchBody;
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
use Fatpanda\BexioConnector\RequestQuery\Projects\TimesheetStatusRequestQuery;
use Fatpanda\BexioConnector\RequestQuery\RequestQueryInterface;
use Fatpanda\BexioConnector\RequestQuery\Sales\InvoicesRequestQuery;
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
    protected const RESPONSE_STATUS = 200;
    protected const ERROR_MESSAGE = 'Error message';

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
        $bulkBody = new ContactBulkBody();
        $searchBody = new ContactsSearchBody();

        $this->runListRequest('getContactsList', $responseBodyClass, [], $query);
        $this->runRequest('postContact', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchContacts', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getContact', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putContact', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteContact', Success::class, [self::REQUEST_PARAM_INT]);
        $this->runListRequest('postContactsBulk', $responseBodyClass, [$bulkBody]);
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

    public function testGetCompaniesList()
    {
        $this->runListRequest('getCompaniesList', Company::class);
    }

    public function testGetCompany()
    {
        $this->runRequest('getCompany', Company::class, [self::REQUEST_PARAM_INT]);
    }

    public function testGetCountriesList()
    {
        $query = new CountriesRequestQuery();
        $this->runListRequest('getCountriesList', Country::class, [], $query);
    }

    public function testGetCountry()
    {
        $this->runRequest('getCountry', Country::class, [self::REQUEST_PARAM_INT]);
    }

    public function testGetLanguagesList()
    {
        $query = new LanguagesRequestQuery();
        $this->runListRequest('getLanguagesList', Language::class, [], $query);
    }

    public function testGetNotesList()
    {
        $query = new NotesRequestQuery();
        $this->runListRequest('getNotesList', Note::class, [], $query);
    }

    public function testGetNote()
    {
        $this->runRequest('getNote', Note::class, [self::REQUEST_PARAM_INT]);
    }

    public function testGetPaymentTypesList()
    {
        $query = new PaymentTypesRequestQuery();
        $this->runListRequest('getPaymentTypesList', PaymentType::class, [], $query);
    }

    public function testGetTask()
    {
        $this->runRequest('getTask', Task::class, [self::REQUEST_PARAM_INT]);
    }

    public function testGetTasksList()
    {
        $query = new TasksRequestQuery();
        $this->runListRequest('getTasksList', Task::class, [], $query);
    }

    public function testGetUnitsList()
    {
        $query = new UnitsRequestQuery();
        $this->runListRequest('getUnitsList', Unit::class, [], $query);
    }

    public function testGetTaskPrioritiesList()
    {
        $query = new TaskPrioritiesRequestQuery();
        $this->runListRequest('getTaskPrioritiesList', TaskPriority::class, [], $query);
    }

    public function testGetTaskStatusesList()
    {
        $query = new TaskStatusesRequestQuery();
        $this->runListRequest('getTaskStatusesList', TaskStatus::class, [], $query);
    }

    public function testGetUnit()
    {
        $this->runRequest('getUnit', Unit::class, [self::REQUEST_PARAM_INT]);
    }

    public function testGetUsersList()
    {
        $query = new UsersRequestQuery();
        $this->runListRequest('getUsersList', User::class, [], $query);
    }

    public function testGetUser()
    {
        $this->runRequest('getUser', User::class, [self::REQUEST_PARAM_INT]);
    }

    public function testGetTimesheetStatusList()
    {
        $query = new TimesheetStatusRequestQuery();
        $this->runListRequest('getTimesheetStatusList', TimesheetStatus::class, [], $query);
    }

    public function testInvoice()
    {
        $responseBodyClass = Invoice::class;
        $query = new InvoicesRequestQuery();
        $body = new InvoiceBody();
        $searchBody = new InvoicesSearchBody();

        $this->runListRequest('getInvoicesList', $responseBodyClass, [], $query);
        $this->runRequest('postInvoice', $responseBodyClass, [$body]);
        $this->runListRequest('postSearchInvoices', $responseBodyClass, [$searchBody], $query);
        $this->runRequest('getInvoice', $responseBodyClass, [self::REQUEST_PARAM_INT]);
        $this->runRequest('getInvoicePdf', File::class, [self::REQUEST_PARAM_INT]);
        $this->runRequest('putInvoice', $responseBodyClass, [self::REQUEST_PARAM_INT, $body]);
        $this->runRequest('deleteInvoice', Success::class, [self::REQUEST_PARAM_INT]);
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
