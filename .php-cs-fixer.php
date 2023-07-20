<?php

declare(strict_types=1);

use Ergebnis\PhpCsFixer\Config;

$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php82());

$config->getFinder()->in(__DIR__);
$config->setCacheFile(__DIR__ . '/.build/php-cs-fixer/.php-cs-fixer.cache');
$rules= $config->getRules();
$config->setRules(
    array_merge(
        $config->getRules(),
        [
            'final_class' => false,
            'final_public_method_for_abstract_class' => false,
            'native_function_invocation' => false,
            'protected_to_private' => false,
            'return_assignment' => false,
            'yoda_style' => false,
        ]
    )
);

return $config;
