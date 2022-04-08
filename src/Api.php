<?php


namespace FluxEco\JsonSchemaDocument;
use FluxEco\JsonSchemaDocument\Core\Ports;

class Api
{

    private function __construct()
    {

    }

    public static function new(): self
    {
        return new self();
    }

    final public function getSchemaDocument(string $yamlSchemaFilePath): SchemaDocument
    {
        $service = Ports\SchemaFileService::new();
        $schemaDocument = $service->getSchemaDocument($yamlSchemaFilePath);
        return SchemaDocument::fromDomain($schemaDocument);
    }
}