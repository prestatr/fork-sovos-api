<?php

namespace Bulut\eFaturaUBL;

class DespatchAdvice
{
    public string $UBLVersionID;

    public string $CustomizationID;

    public string $ProfileID;

    public string $ID;

    public string $CopyIndicator;

    public string $UUID;

    public string $IssueDate;

    public string $IssueTime;

    public string $DespatchAdviceTypeCode;

    public int $LineCountNumeric;

    /**
     * @var \Bulut\eFaturaUBL\OrderReference
     */
    public $OrderReference;

    /**
     * @var \Bulut\eFaturaUBL\AdditionalDocumentReference
     */
    public $AdditionalDocumentReference;

    /**
     * @var \Bulut\eFaturaUBL\Signature
     */
    public $Signature;

    /**
     * @var \Bulut\eFaturaUBL\DespatchSupplierParty
     */
    public $DespatchSupplierParty;

    /**
     * @var \Bulut\eFaturaUBL\DeliveryCustomerParty
     */
    public $DeliveryCustomerParty;

    /**
     * @var \Bulut\eFaturaUBL\Shipment
     */
    public $Shipment;

    /**
     * @var \Bulut\eFaturaUBL\DespatchLine Array
     */
    public $DespatchLine;
}
