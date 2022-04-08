<?php

namespace fluxJsonSchemaDocument;

use FluxEco\JsonSchemaDocument;

function getSchemaDocument(string $yamlSchemaFilePath) : JsonSchemaDocument\SchemaDocument
{
    return JsonSchemaDocument\Api::new()->getSchemaDocument($yamlSchemaFilePath);
}