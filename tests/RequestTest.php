<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Requests\GetFollowedAccountsRequest;

class RequestTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_query_params_work(): void
    {
        $request = (new GetFollowedAccountsRequest('testid'))
            ->setMaxId('123456789');
        $uri = (string)$request->getUri();

        $this->assertStringContainsString('123456789', $uri);

        $request->setMaxId('blablabla');
        $uri = (string)$request->getUri();
        $this->assertStringContainsString('blablabla', $uri);

    }
}
