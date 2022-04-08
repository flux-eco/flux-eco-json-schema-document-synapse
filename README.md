# flux-eco/json-schema-document

This component is supposed to make a json document more readable by 
providing methods for reading certain elements via php.

help and support with the development very welcome :-)

https://json-schema.org/specification.html

The following example application demonstrates the usage:
https://github.com/flux-caps/todo-app

## Functional Usage
account.yaml
```
title: account
type: object
aggregateRootNames:
    - account
properties:
  personId:
    type: integer
  firstname:
    type: string
  lastname:
    type: string
  email:
    type: string
  type:
    type: string
  lastChanged:
    type: string
```

getAndPrintSchemaDocument.php
```
$schemaDocument = fluxJsonSchemaDocument\getSchemaDocument('account.yaml');
print_r($schemaDocument);
```

outputs:
```
Array
FluxEco\JsonSchemaDocument\SchemaDocument Object
(
    [schemaDocument:FluxEco\JsonSchemaDocument\SchemaDocument:private] => FluxEco\JsonSchemaDocument\Core\Domain\SchemaDocument Object
        (
            [title:FluxEco\JsonSchemaDocument\Core\Domain\SchemaDocument:private] => account
            [properties:FluxEco\JsonSchemaDocument\Core\Domain\SchemaDocument:private] => Array
                (
                    [personId] => FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject Object
                        (
                            [key:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => personId
                            [type:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => integer
                        )

                    [firstname] => FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject Object
                        (
                            [key:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => firstname
                            [type:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => string
                        )

                    [lastname] => FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject Object
                        (
                            [key:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => lastname
                            [type:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => string
                        )

                    [email] => FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject Object
                        (
                            [key:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => email
                            [type:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => string
                        )

                    [type] => FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject Object
                        (
                            [key:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => type
                            [type:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => string
                        )

                    [lastChanged] => FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject Object
                        (
                            [key:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => lastChanged
                            [type:FluxEco\JsonSchemaDocument\Core\Domain\Models\SchemaObject:private] => string
                        )

                )

        )

)
```

## Contributing :purple_heart:
Please ...
1. ... register an account at https://git.fluxlabs.ch
2. ... create pull requests :fire:

## Adjustment suggestions / bug reporting :feet:
Please ...
1. ... register an account at https://git.fluxlabs.ch
2. ... ask us for a Service Level Agreement: support@fluxlabs.ch :kissing_heart:
3. ... read and create issues