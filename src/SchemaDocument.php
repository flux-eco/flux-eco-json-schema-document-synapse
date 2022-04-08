<?php

namespace FluxEco\JsonSchemaDocument;

use FluxEco\JsonSchemaDocument\Core\Domain;

class SchemaDocument
{

    private Domain\SchemaDocument $schemaDocument;

    private function __construct(Domain\SchemaDocument $schemaDocument)
    {
        $this->schemaDocument = $schemaDocument;
    }

    public static function fromDomain(Domain\SchemaDocument $schemaDocument) : self
    {
        return new self($schemaDocument);
    }

    public function has(string $key) : bool
    {
        return array_key_exists($key, $this->schemaDocument->getProperties());
    }

    public function getPropertySchema(string $key) : SchemaObject
    {
        $schemaObject = $this->schemaDocument->getProperties()[$key];
        return SchemaObject::fromDomain($schemaObject);
    }

    /** @return SchemaObject[] */
    public function getProperties() : array
    {
        $properties = [];
        foreach ($this->schemaDocument->getProperties() as $key => $property) {
            $properties[$key] = SchemaObject::fromDomain($property);
        }
        return $properties;
    }

    /** @return string */
    public function getTitle() : string
    {
        return $this->schemaDocument->getTitle();
    }
}