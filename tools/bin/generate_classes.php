<?php

declare(strict_types=1);

use Tools\AbstractRequestClassTemplate;
use Tools\CollectionClassTemplate;
use Tools\Entity;
use Tools\EntitySpecsRepository;
use Tools\MethodSpecsRepository;
use Tools\ModelClassTemplate;
use Tools\RequestClassTemplate;
use Tools\ResultClassTemplate;
use Tools\TestClassTemplate;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

$entity = new Entity('EmptyOrUnknownResponse');
$classTemplate = new ModelClassTemplate($entity);

echo 'Writing file for EmptyOrUnknownResponse entity... ';
$classTemplate->write(true);
echo "Done!\n\n";

$specsRepo = new EntitySpecsRepository();

foreach ($specsRepo->getAllEntityNames() as $name) {
    $entity = new Entity($name);
    $classTemplate = new ModelClassTemplate($entity);

    echo "Writing file for entity {$name}... ";
    $classTemplate->write(true);
    echo "Done!\n\n";
}

foreach ($specsRepo->getNamesWithCollection() as $name) {
    $entity = new Entity($name);
    $classTemplate = new CollectionClassTemplate($entity);

    echo "Writing file for entity {$name}... ";
    $classTemplate->write(true);
    echo "Done!\n\n";
}

$methodsRepo = new MethodSpecsRepository();

foreach ($methodsRepo->getAllReturnedEntities() as $entityName) {
    $entity = new Entity($entityName);

    $template = new ResultClassTemplate($entity);
    echo 'Writing ... ';
    $template->write(true);
    echo "Done!\n\n";

    $template = new AbstractRequestClassTemplate($entity);
    echo 'Writing ... ';
    $template->write(true);
    echo "Done!\n\n";
}

foreach ($methodsRepo->getAllMethodSpecs() as $spec) {
    $template = new RequestClassTemplate($spec);
    echo 'Writing ... ';
    $template->write(true);
    echo "Done!\n\n";
}

foreach ($specsRepo->getAllEntityNames() as $entityName) {
    $spec = $specsRepo->getEntityData($entityName);

    if (empty($spec['exampleJson'])) {
        continue;
    }

    $decoded = json_decode($spec['exampleJson'], true);

    if (!is_array($decoded)) {
        continue;
    }

    $entity = new Entity($entityName);
    $template = new TestClassTemplate($entity, $spec);
    $template->write(true);
}
