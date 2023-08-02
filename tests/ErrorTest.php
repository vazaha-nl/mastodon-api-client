<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Concerns\CreatesMockClient;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\ApiErrorException;
use Vazaha\Mastodon\Exceptions\BadRequestException;
use Vazaha\Mastodon\Exceptions\ForbiddenException;
use Vazaha\Mastodon\Exceptions\NotFoundException;
use Vazaha\Mastodon\Exceptions\TooManyRequestsException;
use Vazaha\Mastodon\Exceptions\UnauthorizedException;
use Vazaha\Mastodon\Exceptions\UnprocessableEntityException;
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
            $this->createJsonResponseFromFile(401, 'error.json'),
            $this->createJsonResponseFromFile(403, 'error.json'),
            $this->createJsonResponseFromFile(404, 'error.json'),
            $this->createJsonResponseFromFile(422, 'error.json'),
            $this->createJsonResponseFromFile(429, 'error.json'),
        ])->setBaseUri('notrelevant');
    }

    public function testErrorsThrowCorrectApiClientExceptions(): void
    {
        $this->expectException(BadRequestException::class);
        $this->apiClient->send(new GetRequest('id'));

        $this->expectException(UnauthorizedException::class);
        $this->apiClient->send(new GetRequest('id'));

        $this->expectException(ForbiddenException::class);
        $this->apiClient->send(new GetRequest('id'));

        $this->expectException(NotFoundException::class);
        $this->apiClient->send(new GetRequest('id'));

        $this->expectException(UnprocessableEntityException::class);
        $this->apiClient->send(new GetRequest('id'));

        $this->expectException(TooManyRequestsException::class);
        $this->apiClient->send(new GetRequest('id'));
    }

    public function testExceptionExposesErrorModel(): void
    {
        try {
            $this->apiClient->send(new GetRequest('id'));
        } catch (ApiErrorException $e) {
            $error = $e->getError();
            self::assertEquals(400, $e->getCode());
            self::assertInstanceOf(ErrorModel::class, $error);
            self::assertEquals('invalid_grant', $error->error);
        }
    }
}
