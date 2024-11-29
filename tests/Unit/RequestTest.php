<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Factories\ApiClientFactory;
use Vazaha\Mastodon\Requests\Accounts\FollowingRequest;

class RequestTest extends TestCase
{
    public function testQueryParamsWork(): void
    {
        $request = (new FollowingRequest('testid'))
            ->setMaxId('MAXID');

        $uri = (string) $request->getUri();
        self::assertStringContainsString('max_id=MAXID', $uri);

        $request->setMinId('MINID');
        $uri = (string) $request->getUri();
        self::assertStringContainsString('min_id=MINID', $uri);

        $request->setSinceId('SINCEID');
        $uri = (string) $request->getUri();
        self::assertStringContainsString('since_id=SINCEID', $uri);

        $request->setLimit(123);
        $uri = (string) $request->getUri();
        self::assertStringContainsString('limit=123', $uri);
    }

    public function testInvalidParamsInArrayThrowException(): void
    {
        $apiClient = (new ApiClientFactory())
            ->build();

        $this->expectException(\InvalidArgumentException::class);
        $apiClient->methods()->statuses()->create(
            'test status',
            [],
            [
                'foobar' => static function (): void {
                },
            ],
        );
    }
}
