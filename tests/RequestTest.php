<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Requests\GetFollowedAccountsRequest;

class RequestTest extends TestCase
{
    public function testQueryParamsWork(): void
    {
        $request = (new GetFollowedAccountsRequest('testid'))
            ->setMaxId('MAXID');

        $uri = (string) $request->getUri();
        self::assertStringContainsString('max_id=MAXID', $uri);

        $request->setMinId('MINID');
        $uri = (string) $request->getUri();
        self::assertStringContainsString('min_id=MINID', $uri);

        $request->setSinceId('SINCEID');
        $uri = (string) $request->getUri();
        self::assertStringContainsString('since_id=SINCEID', $uri);

        $request->setLimit('123');
        $uri = (string) $request->getUri();
        self::assertStringContainsString('limit=123', $uri);
    }
}
