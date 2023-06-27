<?php

namespace Bulut\DespatchService;

class GetDesViewResponse
{
    public string $UUID = '';

    public string $Type = '';

    public string $DocType = '';

    public string $ViewType = '';

    public string $DocData = '';

    public string $Result = '';

    public function getUUID(): string
    {
        return $this->UUID;
    }

    public function getType(): string
    {
        return $this->Type;
    }

    public function getDocType(): string
    {
        return $this->DocType;
    }

    public function getViewType(): string
    {
        return $this->ViewType;
    }

    public function getDocData(): string
    {
        return $this->DocData;
    }

    public function getResult(): string
    {
        return $this->Result;
    }
}
