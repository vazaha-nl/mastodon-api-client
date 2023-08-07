<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tests\Unit\Concerns\CreatesMockClient;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\BaseUriNotSetException;
use Vazaha\Mastodon\Factories\ApiClientFactory;
use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Models\ListModel;
use Vazaha\Mastodon\Requests\Accounts\GetRequest;
use Vazaha\Mastodon\Requests\Lists\GetRequest as ListsGetRequest;
use Vazaha\Mastodon\Results\AccountResult;
use Vazaha\Mastodon\Results\ListResult;

class ApiClientTest extends TestCase
{
    use CreatesMockClient;

    protected ApiClient $apiClient;

    protected function setUp(): void
    {
        parent::setUp();

        $responses = [
            $this->createJsonResponseFromFile(200, 'account.json'),
            $this->createJsonResponseFromFile(200, 'list.json'),
        ];
        $this->apiClient = $this->createMockClient($responses);
    }

    public function testClientCanBeInstantiatedUsingFactory(): void
    {
        $factory = new ApiClientFactory();
        $client = $factory->build();
        self::assertInstanceOf(ApiClient::class, $client);
    }

    public function testThrowsDomainNotSetExceptionWithoutDomain(): void
    {
        $this->expectException(BaseUriNotSetException::class);
        $this->apiClient->send(new GetRequest('testid'));
    }

    public function testGetAccountAndList(): void
    {
        $result = $this->apiClient
            ->setBaseUri('https://example.org')
            ->send(new GetRequest('foo'));
        self::assertInstanceOf(AccountResult::class, $result);

        $account = $result->first();

        self::assertInstanceOf(AccountModel::class, $account);
        self::assertEquals('23634', $account->id);

        $result = $this->apiClient
            ->setBaseUri('https://example.org')
            ->send(new ListsGetRequest());
        self::assertInstanceOf(ListResult::class, $result);

        $list = $result->first();

        self::assertInstanceOf(ListModel::class, $list);
        self::assertEquals(12345, $list->id);
        self::assertEquals('Test List', $list->title);
    }

    public function testGetLists(): void
    {
        $result = $this->apiClient
            ->setBaseUri('https://example.org')
            ->send(new ListsGetRequest());
        self::assertInstanceOf(ListResult::class, $result);
    }

    public function testGetAccountAndListUsingProxy(): void
    {
        $account = $this->apiClient
            ->setBaseUri('https://example.org')
            ->methods()
            ->accounts()
            ->get('foo');

        self::assertInstanceOf(AccountModel::class, $account);
        self::assertEquals('23634', $account->id);

        $list = $this->apiClient
            ->setBaseUri('https://example.org')
            ->methods()
            ->lists()
            ->get()
            ->first();

        self::assertInstanceOf(ListModel::class, $list);
        self::assertEquals(12345, $list->id);
        self::assertEquals('Test List', $list->title);
    }

    public function testGetListsUsingProxy(): void
    {
        $result = $this->apiClient
            ->setBaseUri('https://example.org')
            ->methods()
            ->lists()
            ->get();
        self::assertInstanceOf(ListResult::class, $result);
    }

    public function testLookupAccount(): void
    {
        $account = $this->apiClient
            ->setBaseUri('https://example.org')
            ->methods()
            ->accounts()
            ->lookup('acct');

        self::assertInstanceOf(AccountModel::class, $account);
        self::assertSame('23634', $account->id);
    }

    public function testGetAuthorizeUrl(): void
    {
        $uri = $this->apiClient
            ->setBaseUri('http://example.org')
            ->getAuthorizeUrl(
                'code',
                'clientid',
                'http://example.org/callback',
                'read write',
            );

        self::assertStringStartsWith('http://example.org', (string) $uri);
    }
}
