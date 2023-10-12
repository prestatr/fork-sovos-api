<?php

namespace Bulut\InvoiceService;

class GetUblList
{
    public string $soapAction = 'getUBLList';

    public string $methodName = 'getUBLListRequest';

    public string $Identifier;

    public string $VKN_TCKN;

    public $UUID;

    public $DocType;

    public $Type;

    public $FromDate;

    public $ToDate;

    public $FromDateSpecified;

    public $ToDateSpecified;

    public function setIdentifier(string $Identifier): static
    {
        $this->Identifier = $Identifier;

        return $this;
    }

    public function setVKNTCKN(string $VKN_TCKN): static
    {
        $this->VKN_TCKN = $VKN_TCKN;

        return $this;
    }

    public function setUUID(string $UUID): static
    {
        $this->UUID = $UUID;

        return $this;
    }

    /**
     * INVOICE, ENVOLOPE
     */
    public function setDocType(string $DocType): static
    {
        $this->DocType = $DocType;

        return $this;
    }

    /**
     * INBOUND, OUTBOUND
     */
    public function setType(string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    /**
     * 2020-01-01T00:00:00+03:00
     */
    public function setFromDate(string $FromDate): static
    {
        $this->FromDate = $FromDate;

        return $this;
    }

    /**
     * 2020-01-01T23:59:59+03:00
     */
    public function setToDate(string $ToDate): static
    {
        $this->ToDate = $ToDate;

        return $this;
    }

    public function setFromDateSpecified(bool $FromDateSpecified): static
    {
        $this->FromDateSpecified = $FromDateSpecified;

        return $this;
    }

    public function setToDateSpecified(bool $ToDateSpecified): static
    {
        $this->ToDateSpecified = $ToDateSpecified;

        return $this;
    }
}
