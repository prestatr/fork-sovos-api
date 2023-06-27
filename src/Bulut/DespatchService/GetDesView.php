<?php

namespace Bulut\DespatchService;

class GetDesView
{
    public string $soapAction = 'getDesView';

    public string $methodName = 'getDesViewRequest';

    public string $Identifier;

    public string $VKN_TCKN;

    public array $DocDetails;

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

    /**
     * @param $DocDetails \Bulut\DespatchService\DocDetails[]
     */
    public function setDocDetails(array $DocDetails): static
    {
        $this->DocDetails = $DocDetails;

        return $this;
    }
}
