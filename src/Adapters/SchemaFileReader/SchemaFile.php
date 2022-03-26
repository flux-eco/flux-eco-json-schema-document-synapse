<?php


namespace FluxEco\JsonSchemaDocument\Adapters\SchemaFileReader;

class SchemaFile
{

    private string $filePath;
    private string $schemaObjectName;
    private array $schemaObjectArray;

    private function __construct(
        string $filePath,
        string $schemaObjectName,
        array  $schema
    )
    {
        $this->filePath = $filePath;
        $this->schemaObjectName = $schemaObjectName;
        $this->schemaObjectArray = $schema;
    }


    public static function new(
        string $filePath,
        string $schemaObjectName,
        array  $schemaObjectArray
    ): self
    {
        return new self($filePath, $schemaObjectName, $schemaObjectArray);
    }

    public static function fromFilePath(string $filePath): self
    {
        $pathInfo = pathinfo($filePath);
        $schemaObjectName = $pathInfo['filename'];
        $schemaObjectArray = yaml_parse(file_get_contents($filePath));
        return new self($filePath, $schemaObjectName, $schemaObjectArray);
    }

    final public function getFilePath(): string
    {
        return $this->filePath;
    }

    final public function getSchemaObjectName(): string
    {
        return $this->schemaObjectName;
    }

    final public function getSchemaObjectArray(): array
    {
        return $this->schemaObjectArray;
    }
}