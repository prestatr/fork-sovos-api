<?php

namespace Bulut\InvoiceService;

class GetRawUserListResponse
{
    protected $DocData;

    public function getDocData(): string
    {
        return $this->DocData;
    }

    public function setDocData(string $DocData): static
    {
        $this->DocData = $DocData;
        return $this;
    }
}
