<?php

declare(strict_types=1);

namespace Tests\Tools;

use PHPUnit\Framework\TestCase;
use Tools\Entity;
use Tools\Enums\ClassType;

class EntityTest extends TestCase
{
    protected string $projectRoot;

    protected function setUp(): void
    {
        parent::setUp();

        $this->projectRoot = dirname(__DIR__, 2);
    }

    public function testNamespace(): void
    {
        $entity = new Entity('Foo');
        $namespace = $entity->getNamespace(ClassType::MODEL);
        self::assertEquals('Vazaha\\Mastodon\\Models', $namespace);

        $entity = new Entity('Foo::Bar');
        $namespace = $entity->getNamespace(ClassType::MODEL);
        self::assertEquals('Vazaha\\Mastodon\\Models\\Foo', $namespace);
    }

    public function testFQN(): void
    {
        $entity = new Entity('Foo');
        $fqn = $entity->getFQN(ClassType::MODEL);
        self::assertEquals('Vazaha\\Mastodon\\Models\\FooModel', $fqn);

        $entity = new Entity('Foo::Bar');
        $fqn = $entity->getFQN(ClassType::MODEL);
        self::assertEquals('Vazaha\\Mastodon\\Models\\Foo\\BarModel', $fqn);
    }

    public function testDirectory(): void
    {
        $entity = new Entity('Foo');
        $dir = $entity->getDirectory(ClassType::MODEL);
        self::assertEquals($this->projectRoot . '/src/Models', $dir);

        $entity = new Entity('Foo::Bar');

        $relative = $entity->getRelativeDirectory();
        self::assertEquals('Foo', $relative);

        $dir = $entity->getDirectory(ClassType::MODEL);
        self::assertEquals($this->projectRoot . '/src/Models/Foo', $dir);
    }

    public function testPath(): void
    {
        $entity = new Entity('Foo');
        $path = $entity->getPath(ClassType::MODEL);
        self::assertEquals($this->projectRoot . '/src/Models/FooModel.php', $path);

        $entity = new Entity('Foo::Bar');
        $path = $entity->getPath(ClassType::MODEL);
        self::assertEquals($this->projectRoot . '/src/Models/Foo/BarModel.php', $path);
    }

    public function testBaseClass(): void
    {
        $entity = new Entity('Foo');
        self::assertEquals('FooModel', $entity->getBaseClassName(ClassType::MODEL));

        $entity = new Entity('Foo::Bar');
        self::assertEquals('BarModel', $entity->getBaseClassName(ClassType::MODEL));
    }
}
