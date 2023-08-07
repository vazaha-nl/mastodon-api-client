<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Concerns\CreatesMockClient;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Requests\Accounts\FollowingRequest;
use Vazaha\Mastodon\Results\AccountResult;

class PagingTest extends TestCase
{
    use CreatesMockClient;

    protected ApiClient $apiClient;

    protected function setUp(): void
    {
        parent::setUp();
        $this->apiClient = $this->createMockClient([
            $this->createJsonResponseFromFile(
                200,
                'accounts1.json',
                [
                    'Link' => '<https://example.org/accounts?min_id=3>; rel="next"',
                ],
            ),
            $this->createJsonResponseFromFile(
                200,
                'accounts2.json',
                [
                    'Link' => '<https://example.org/accounts?max_id=2>; rel="prev"',
                ],
            ),
            $this->createJsonResponseFromFile(
                200,
                'accounts1.json',
                [
                    'Link' => '<https://example.org/accounts?min_id=3>; rel="next"',
                ],
            ),
        ]);
    }

    public function testPagingRequestAndResult(): void
    {
        $this->apiClient->setBaseUri('https://example.org');

        $result = $this->apiClient->send(new FollowingRequest('testid'));
        self::assertInstanceOf(AccountResult::class, $result);

        self::assertInstanceOf(AccountModel::class, $result[0]);
        self::assertEquals(1, $result[0]->id);

        $previousPage = $result->getPreviousPage();
        self::assertNull($previousPage);

        $nextPage = $result->getNextPage();
        self::assertInstanceOf(AccountResult::class, $nextPage);
        self::assertInstanceOf(AccountModel::class, $nextPage[0]);
        self::assertEquals(3, $nextPage[0]->id);

        $previousPage = $nextPage->getPreviousPage();
        self::assertInstanceOf(AccountResult::class, $previousPage);

        $nextPage = $nextPage->getNextPage();
        self::assertNull($nextPage);
    }

    public function testPagingRequestAndResultUsingProxy(): void
    {
        $this->apiClient->setBaseUri('https://example.org');

        $result = $this->apiClient
            ->methods()
            ->accounts()
            ->following('testid');

        self::assertInstanceOf(AccountResult::class, $result);

        self::assertInstanceOf(AccountModel::class, $result[0]);
        self::assertEquals(1, $result[0]->id);

        $previousResult = $result->getPreviousPage();
        self::assertNull($previousResult);

        $nextPage = $result->getNextPage();
        self::assertInstanceOf(AccountResult::class, $nextPage);
        self::assertInstanceOf(AccountModel::class, $nextPage[0]);

        self::assertEquals(3, $nextPage[0]->id);

        $previousPage = $nextPage->getPreviousPage();
        self::assertInstanceOf(AccountResult::class, $previousPage);
        self::assertInstanceOf(AccountModel::class, $previousPage[0]);

        self::assertEquals(1, $previousPage[0]->id);

        $nextPage = $nextPage->getNextPage();
        self::assertNull($nextPage);
    }
}
