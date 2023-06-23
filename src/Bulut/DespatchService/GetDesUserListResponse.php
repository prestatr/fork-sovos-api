<?php

namespace Bulut\DespatchService;

class GetDesUserListResponse
{
    protected string $DocData;

    public function setDocData(string $DocData): static
    {
        $this->DocData = $DocData;
        return $this;
    }

    public function getDocData(): string
    {
        return $this->DocData;
    }
}
