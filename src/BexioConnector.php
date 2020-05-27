<?php

namespace Fatpanda\BexioConnector;

use Fatpanda\BexioConnector\Message\Response;
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
use Fatpanda\BexioConnector\Request\Other\Countries\ListCountriesRequest;
use Fatpanda\BexioConnector\Request\Other\Countries\ShowCountryRequest;
use Fatpanda\BexioConnector\Request\Other\Languages\ListLanguagesRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\ListNotesRequest;
use Fatpanda\BexioConnector\Request\Other\Notes\ShowNoteRequest;
use Fatpanda\BexioConnector\Request\Other\PaymentTypes\ListPaymentTypesRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ListTaskPrioritiesRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ListTaskStatusesRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ShowTaskRequest;
use Fatpanda\BexioConnector\Request\Other\Tasks\ListTasksRequest;
use Fatpanda\BexioConnector\Request\Other\Units\ListUnitsRequest;
use Fatpanda\BexioConnector\Request\Other\Units\ShowUnitRequest;
use Fatpanda\BexioConnector\Request\Other\Users\ListUsersRequest;
use Fatpanda\BexioConnector\Request\Other\Users\ShowUserRequest;
use Fatpanda\BexioConnector\Request\Projects\Timesheets\ListTimesheetStatusRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\CreateInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\DeleteInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\EditInvoiceRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ListInvoicesRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\SearchInvoicesRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ShowInvoicePDFRequest;
use Fatpanda\BexioConnector\Request\Sales\Invoices\ShowInvoiceRequest;
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
use Fatpanda\BexioConnector\RequestBody\RequestBodyInterface;
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
    // todo: Create contact
    // todo: Search contacts
    // todo: Edit a contact
    // todo: Delete a contact
    // todo: Bulk create contacts

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
     * @param ContactBulkBody $body
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function postContactsBulk(ContactBulkBody $body): Response
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
     * @param int $countryId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getCountry(int $countryId): Response
    {
        $this->pathParameters['country_id'] = $countryId;
        $request = new ShowCountryRequest(...$this->getRequestParameters());
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
     * @param int $noteId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getNote(int $noteId): Response
    {
        $this->pathParameters['note_id'] = $noteId;
        $request = new ShowNoteRequest(...$this->getRequestParameters());
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
     * @param int $unitId
     * @return Response|SuccessResponse|ErrorResponse
     */
    public function getUnit(int $unitId): Response
    {
        $this->pathParameters['unit_id'] = $unitId;
        $request = new ShowUnitRequest(...$this->getRequestParameters());
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
    // Projects\Timesheets

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

    // Sales
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
