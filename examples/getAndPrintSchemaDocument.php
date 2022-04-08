<?php

require_once __DIR__ . '/../vendor/autoload.php';

$schemaDocument = fluxJsonSchemaDocument\getSchemaDocument('account.yaml');
print_r($schemaDocument);