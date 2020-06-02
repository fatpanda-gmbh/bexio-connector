<?php


namespace Fatpanda\BexioConnector\Request\Sales;


interface DocumentTypeInterface
{
    const DOCUMENT_TYPE_OFFER = 'kb_offer';
    const DOCUMENT_TYPE_ORDER = 'kb_order';
    const DOCUMENT_TYPE_INVOICE = 'kb_invoice';

    const DOCUMENT_TYPES = [
        self::DOCUMENT_TYPE_OFFER,
        self::DOCUMENT_TYPE_ORDER,
        self::DOCUMENT_TYPE_INVOICE,
    ];
}
