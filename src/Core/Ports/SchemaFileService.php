<?php


namespace FluxEco\JsonSchemaDocument\Core\Ports;
use FluxEco\JsonSchemaDocument\Core\Domain;

class SchemaFileService
{

    private function __construct()
    {

    }

    public static function new(): self
    {
        return new self();
    }

    public function getSchemaDocument(string $jsonSchemaYamlFilePath): Domain\SchemaDocument {
        $schema = yaml_parse(file_get_contents($jsonSchemaYamlFilePath));
        $properties = [];
        foreach($schema['properties'] as $key => $property) {
            $properties[$key] = Domain\Models\SchemaObject::new($property['type']);
        }

        return Domain\SchemaDocument::new($properties);
    }
}