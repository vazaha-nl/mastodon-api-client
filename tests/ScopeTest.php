<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Enums\Scope;
use Vazaha\Mastodon\Requests\Concerns\ResolvesScope;

class ScopeTest extends TestCase
{
    use ResolvesScope;

    public function testScopeResolution(): void
    {
        $this->assertNull($this->resolveScope(null));
        $this->assertEquals('testscope', $this->resolveScope('testscope'));
        $this->assertEquals('admin:write', $this->resolveScope(Scope::ADMIN_WRITE));
        $this->assertEquals('admin:read admin:write', $this->resolveScope([Scope::ADMIN_READ, Scope::ADMIN_WRITE]));
        $this->assertEquals('testscope admin:write', $this->resolveScope(['testscope', Scope::ADMIN_WRITE]));
    }
}
