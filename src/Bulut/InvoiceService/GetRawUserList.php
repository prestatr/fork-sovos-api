<?php

namespace Bulut\InvoiceService;

class GetRawUserList
{
    public $soapAction = "getRAWUserList";
    public $methodName = "getRAWUserListRequest";
    public $Identifier;
    public $VKN_TCKN;
    public $Role;
    public $Parameters;

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

    public function setRole(string $Role): static
    {
        $this->Role = $Role;
        return $this;
    }

    public function setParameters(string $Parameters): static
    {
        $this->Parameters = $Parameters;
        return $this;
    }
}
