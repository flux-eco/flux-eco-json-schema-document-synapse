<?php


namespace FluxEco\JsonSchemaDocument\Core\Domain\Models;

class SchemaObject
{
    private string $type;

    private function __construct(
        string $type
    )
    {
        $this->type = $type;
    }

    public static function new(
        string $type
    ): self
    {
        return new self($type);
    }

    public function getType(): string
    {
        return $this->type;
    }
}