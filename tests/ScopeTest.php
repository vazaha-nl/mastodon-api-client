<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Enums\Scope;
use Vazaha\Mastodon\Requests\Concerns\ResolvesScope;

class ScopeTest extends TestCase
{
    use ResolvesScope;

    public function testScopeResolution(): void
    {
        self::assertNull($this->resolveScope(null));
        self::assertEquals('testscope', $this->resolveScope('testscope'));
        self::assertEquals('admin:write', $this->resolveScope(Scope::ADMIN_WRITE));
        self::assertEquals('admin:read admin:write', $this->resolveScope([Scope::ADMIN_READ, Scope::ADMIN_WRITE]));
        self::assertEquals('testscope admin:write', $this->resolveScope(['testscope', Scope::ADMIN_WRITE]));
    }
}
