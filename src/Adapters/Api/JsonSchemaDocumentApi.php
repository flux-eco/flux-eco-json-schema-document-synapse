<?php


namespace FluxEco\JsonSchemaDocument\Adapters\Api;
use FluxEco\JsonSchemaDocument\Core\Ports;

class JsonSchemaDocumentApi
{

    private function __construct()
    {

    }

    public static function new(): self
    {
        return new self();
    }

    final public function getSchemaDocument(string $schemaFilePath): SchemaDocument
    {
        $service = Ports\SchemaFileService::new();
        $schemaDocument = $service->getSchemaDocument($schemaFilePath);
        return SchemaDocument::fromDomain($schemaDocument);
    }
}