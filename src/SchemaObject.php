<?php

namespace FluxEco\JsonSchemaDocument;
use FluxEco\JsonSchemaDocument\Core\Domain;

class SchemaObject
{
    private Domain\Models\SchemaObject $schemaObject;

    private function __construct(Domain\Models\SchemaObject $schemaObject)
    {
        $this->schemaObject = $schemaObject;
    }

    public static function fromDomain(Domain\Models\SchemaObject $schemaObject): self
    {
        return new self($schemaObject);
    }

    public function getKey(): string
    {
        return $this->schemaObject->getKey();
    }

    public function getType(): string
    {
        return $this->schemaObject->getType();
    }

    public function getSchema(): array
    {
        return $this->schemaObject->toArray();
    }
}