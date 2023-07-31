<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Concerns\CreatesMockClient;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\ApiClientException;
use Vazaha\Mastodon\Models\ErrorModel;
use Vazaha\Mastodon\Requests\Accounts\GetRequest;

class ErrorTest extends TestCase
{
    use CreatesMockClient;

    protected ApiClient $apiClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->apiClient = $this->createMockClient([
            $this->createJsonResponseFromFile(400, 'error.json'),
        ])->setBaseUri('notrelevant');
    }

    public function test400ErrorThrowsApiClientException(): void
    {
        $this->expectException(ApiClientException::class);
        $this->apiClient->doRequest(new GetRequest('id'));
    }

    public function testExceptionExposesErrorModel(): void
    {
        try {
            $this->apiClient->doRequest(new GetRequest('id'));
        } catch (ApiClientException $e) {
            $error = $e->getError();
            self::assertEquals(400, $e->getCode());
            self::assertInstanceOf(ErrorModel::class, $error);
            self::assertEquals('invalid_grant', $error->error);
        }
    }
}
