<?php

namespace FluxEco\JsonSchemaDocument\Core\Domain;

class SchemaDocument
{
    private string $title;
    /** @var Models\SchemaObject[] */
    private array $properties;

    private function __construct(string $title, array $schemaObjects)
    {
        $this->title = $title;
        $this->properties = $schemaObjects;
    }

    public static function new(
        string $title,
        array $schemaObjects
    ) : self {
        return new self($title, $schemaObjects);
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    /** @return Models\SchemaObject[] */
    final public function getProperties() : array
    {
        return $this->properties;
    }

}