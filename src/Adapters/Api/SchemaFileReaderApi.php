<?php


namespace FluxEco\JsonSchemaDocument\Adapters\Api;
use FluxEco\JsonSchemaDocument\Core\Ports;

class SchemaFileReaderApi
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

    /*
    final public function getSchemaFilesOfDirectory(string $directoryPath): SchemaFileReaderResponse
    {

        $schemaFileResponse = SchemaFileReaderResponse::new();
        if ($handle = opendir($directoryPath)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry !== '.' && $entry !== '..' && is_file($directoryPath . '/' . $entry)) {
                    $filePath = $directoryPath . '/' . $entry;
                    $schemaFileResponse->append(
                        $filePath
                    );
                }
            }
            closedir($handle);
        }

        return $schemaFileResponse;
    }*/
}