<?php

declare(strict_types=1);

use Tools\CollectionClassTemplate;
use Tools\Entity;
use Tools\ModelClassTemplate;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

// $entity = new Entity('Role');
// $classTemplate = new ModelClassTemplate($entity);

$entity = new Entity('Admin::Ip');
$classTemplate = new CollectionClassTemplate($entity);

echo 'Writing file ... ';
$classTemplate->write(true);
echo "Done!\n\n";

$classTemplate = new ModelClassTemplate($entity);

echo 'Writing file ... ';
$classTemplate->write(true);
echo "Done!\n\n";
