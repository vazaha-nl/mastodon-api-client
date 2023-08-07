<?php

namespace Tests\Integration;

use Vazaha\Mastodon\Exceptions\NotFoundException;
use Vazaha\Mastodon\Exceptions\UnauthorizedException;
use Vazaha\Mastodon\Models\ErrorModel;

class ErrorHandlingTest extends ApiClientTestCase
{
    public function testNotFoundException(): void
    {
        $this->expectException(NotFoundException::class);
        $this->apiClient->methods()->accounts()->get('not existing');
    }

    public function testUnauthorizedException(): void
    {
        $this->expectException(UnauthorizedException::class);
        $this->apiClient->methods()->statuses()->create('do I need auth for this?', []);
    }

    public function testExceptionsExposeErrorObject(): void
    {
        try {
            $this->apiClient->methods()->accounts()->get('not existing');
        } catch (NotFoundException $e) {
            $error = $e->getError();

            self::assertInstanceOf(ErrorModel::class, $error);
        }
    }
}
