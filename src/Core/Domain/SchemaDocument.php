<?php


namespace FluxEco\JsonSchemaDocument\Core\Domain;

class SchemaDocument
{
    /** @var Models\SchemaObject[] */
    private array $properties;

    private function __construct(array $schemaObjects)
    {
        $this->properties = $schemaObjects;
    }

    public static function new(
        array $schemaObjects
    ): self
    {
        return new self($schemaObjects);
    }

    /** @return Models\SchemaObject[] */
    final public function getProperties(): array
    {
        return $this->properties;
    }

}