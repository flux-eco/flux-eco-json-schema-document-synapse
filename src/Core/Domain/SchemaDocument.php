<?php

namespace FluxEco\JsonSchemaDocument\Core\Domain;

class SchemaDocument
{
    private string $name;
    /** @var Models\SchemaObject[] */
    private array $properties;

    private function __construct(string $name, array $schemaObjects)
    {
        $this->name = $name;
        $this->properties = $schemaObjects;
    }

    public static function new(
        string $name,
        array $schemaObjects
    ) : self {
        return new self($name, $schemaObjects);
    }

    public function getName() : string
    {
        return $this->name;
    }

    /** @return Models\SchemaObject[] */
    final public function getProperties() : array
    {
        return $this->properties;
    }

}