<?php


namespace FluxEco\JsonSchemaDocument\Core\Domain\Models;

class SchemaObject
{
    private string $key;
    private string $type;

    private function __construct(
        string $key,
        string $type
    )
    {
        $this->key = $key;
        $this->type = $type;
    }

    public static function new(
        string $key,
        string $type
    ): self
    {
        return new self($key, $type);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getKey() : string
    {
        return $this->key;
    }

    public function toArray() {
        return get_object_vars($this);
    }
}