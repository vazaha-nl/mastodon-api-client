<?php

declare(strict_types=1);

use Tools\ClassGenerator;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

$generator = new ClassGenerator(true);
$generator->generateAll();
