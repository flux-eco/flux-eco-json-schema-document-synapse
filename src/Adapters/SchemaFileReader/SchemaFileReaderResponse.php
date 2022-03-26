<?php


namespace FluxEco\JsonSchemaDocument\Adapters\SchemaFileReader;

class SchemaFileReaderResponse
{
    /** @var SchemaFile[] */
    private array $schemaFiles;


    /** @param SchemaFile[] $schemaFiles */
    private function __construct(
        array $schemaFiles
    )
    {
        $this->schemaFiles = $schemaFiles;
    }

    /** @param SchemaFile[] $schemaFiles */
    public static function new(array $schemaFiles = []): self
    {
        return new self($schemaFiles);
    }

    final public function getSchemaFiles(): array
    {
        return $this->schemaFiles;
    }

    public function append(string $filePath): self
    {
        $schemaFile = SchemaFile::fromFilePath($filePath);
        $this->schemaFiles[] = $schemaFile;
        return $this;
    }
}