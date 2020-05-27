<?php

require_once __DIR__ . '/../../vendor/autoload.php';

require_once('credentials.php');

// Initialize bexio connector once
$bexioConnector = new \Fatpanda\BexioConnector\BexioConnector($token);

// Access bexio OOP-style
$response = $bexioConnector->getContactsList();
if ($response->isSuccessResponse()) {
    foreach ($response->getBody() as $contact) {
        var_dump($contact->getId() . ' - ' . $contact->getName1() . ' - ' . $contact->getAddress());
    }
} else {
    var_dump($response->getCode() . ', ' . $response->getMessage());
}

$response = $bexioConnector->getContact(1);

if ($response->isSuccessResponse()) {
    $contact = $response->getBody();
    var_dump($contact->getId() . ' - ' . $contact->getName1() . ' - ' . $contact->getAddress());
} else {
    var_dump($response->getCode() . ', ' . $response->getMessage());
}

$body = (new \Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoiceBody())
    ->setContactId(1)
    ->setUserId(1)
    ->setLogopaperId(1)
    ->setLanguageId(1)
    ->setBankAccountId(1)
    ->setCurrencyId(1)
    ->setPaymentTypeId(1)
    ->setHeader('Thank you very much for your inquiry. We would be pleased to make you the following offer:')
    ->setFooter('We hope that our offer meets your expectations and will be happy to answer your questions.')
    ->setMwstType(\Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoiceBody::MWST_TYPE_INCLUDING_TAXES)
    ->setMwstIsNet(\Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoiceBody::MWST_IS_NET_TAXES_WILL_BE_INCLUDED)
    ->setShowPositionTaxes(false)
    ->setIsValidFrom(new DateTime('2019-06-24'))
    ->setIsValidTo(new DateTime('2019-07-24'))
;

$response = $bexioConnector->postInvoice($body);
if ($response->isSuccessResponse()) {
    var_dump($response->getBody());
} else {
    var_dump($response->getCode() . ', ' . $response->getMessage());
}

$body = new \Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoicesSearchBody();
$body->createItem()
    ->setField(\Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoicesSearchBodyItem::SEARCH_FIELD_DOCUMENT_NR)
    ->setValue('RE-0000')
    ->setCriteria(\Fatpanda\BexioConnector\RequestBody\Sales\Invoices\InvoicesSearchBodyItem::SEARCH_CRITERIA_LIKE)
;

$response = $bexioConnector->postSearchInvoices($body);
if ($response->isSuccessResponse()) {
    var_dump('Count of invoices: ' . count($response->getBody()));
} else {
    var_dump($response->getCode() . ', ' . $response->getMessage());
}

$query = new \Fatpanda\BexioConnector\RequestQuery\Sales\InvoicesRequestQuery();
$query->setLimit(5);

$response = $bexioConnector->postSearchInvoices($body, $query);
if ($response->isSuccessResponse()) {
    var_dump('Count of invoices: ' . count($response->getBody()));
    foreach ($response->getBody() as $container) {
        var_dump($container->getId());
    }
} else {
    var_dump($response->getCode() . ', ' . $response->getMessage());
}

$query->setOrderBy([
    $query::ORDER_BY_ID => $query::SORT_ORDER_DESC,
]);
$response = $bexioConnector->postSearchInvoices($body, $query);
if ($response->isSuccessResponse()) {
    var_dump('Count of invoices: ' . count($response->getBody()));
    foreach ($response->getBody() as $container) {
        var_dump($container->getId());
    }
} else {
    var_dump($response->getCode() . ', ' . $response->getMessage());
}
