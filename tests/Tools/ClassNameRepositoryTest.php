<?php

declare(strict_types=1);

namespace Tests\Tools;

use Carbon\Factory;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use PHPUnit\Framework\TestCase;
use Tools\ClassName;
use Tools\ClassNameRepository;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\Model;

class ClassNameRepositoryTest extends TestCase
{
    public function testNoDuplicates(): void
    {
        $baseClassName = new ClassName(Model::class);
        $repository = new ClassNameRepository($baseClassName);

        self::assertEquals(0, $repository->get()->count());

        $repository->add(new ClassName(ApiClient::class));

        self::assertEquals(1, $repository->get()->count());

        $repository->add(new ClassName(ApiClient::class));

        self::assertEquals(1, $repository->get()->count());
    }

    public function testAliasGeneration(): void
    {
        $baseClassName = new ClassName(Model::class);
        $repository = new ClassNameRepository($baseClassName);

        $repository->add(new ClassName(Factory::class));
        $repository->add(new ClassName(AuthFactory::class));

        self::assertEquals(2, $repository->get()->count());
        $collection = $repository->get();

        $withAlias = $collection->filter(static fn (ClassName $className) => $className->getAlias() !== null);
        self::assertEquals(1, $withAlias->count());
    }
}
