<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Concerns\CreatesMockClient;
use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Results\AccountResult;

class ProxyTest extends TestCase
{
    use CreatesMockClient;

    public function testProxyCallsWithSingleModelResult(): void
    {
        $client = $this->createMockClient([
            $this->createJsonResponseFromFile(200, 'account.json'),
        ])->setBaseUri('http://example.org');

        $account = $client->methods()->accounts()->get('123');

        self::assertInstanceOf(AccountModel::class, $account);
        self::assertSame('23634', $account->id);
    }

    public function testProxyCallsWithPagedResult(): void
    {
        $client = $this->createMockClient([
            $this->createJsonResponseFromFile(
                200,
                'accounts1.json',
                [
                    'Link' => '<https://example.org/accounts?min_id=3>; rel="next"',
                ],
            ),
            $this->createJsonResponseFromFile(200, 'accounts2.json'),
        ])->setBaseUri('http://example.org');

        $followers = $client->methods()->accounts()->followers('foo');

        self::assertInstanceOf(AccountResult::class, $followers);

        foreach ($followers as $follower) {
            self::assertInstanceOf(AccountModel::class, $follower);
        }

        $account = $followers->first();
        self::assertInstanceOf(AccountModel::class, $account);
        self::assertSame('1', $account->id);

        $nextPageFollowers = $followers->getNextResult();

        self::assertInstanceOf(AccountResult::class, $nextPageFollowers);

        foreach ($nextPageFollowers as $follower) {
            self::assertInstanceOf(AccountModel::class, $follower);
        }

        $nextPageAccount = $nextPageFollowers->first();
        self::assertInstanceOf(AccountModel::class, $nextPageAccount);
        self::assertSame('3', $nextPageAccount->id);

        $nextPageFollowers->concat([1]);
    }
}
