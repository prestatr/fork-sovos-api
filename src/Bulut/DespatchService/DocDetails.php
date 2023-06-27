<?php

namespace Bulut\DespatchService;

class DocDetails
{
    public string $UUID;

    public string $Type;

    public string $DocType;

    public string $ViewType;

    public function setUUID(string $UUID): static
    {
        $this->UUID = $UUID;

        return $this;
    }

    public function setType(string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    public function setDocType(string $DocType): static
    {
        $this->DocType = $DocType;

        return $this;
    }

    public function setViewType(string $ViewType): static
    {
        $this->ViewType = $ViewType;

        return $this;
    }
}
