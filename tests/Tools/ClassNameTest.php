<?php

declare(strict_types=1);

namespace Tests\Tools;

use PHPUnit\Framework\TestCase;
use Tools\ClassName;
use Vazaha\Mastodon\Models\Model;

class ClassNameTest extends TestCase
{
    public function testBaseName(): void
    {
        $className = new ClassName(Model::class);
        self::assertEquals('Model', $className->getBaseName());
    }

    public function testAlias(): void
    {
        $className = new ClassName(Model::class);
        $className->generateAlias();
        self::assertEquals('ModelsModel', (string) $className);
    }
}
