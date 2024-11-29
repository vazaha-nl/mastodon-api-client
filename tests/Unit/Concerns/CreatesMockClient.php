<?php

declare(strict_types=1);

namespace Tests\Unit\Concerns;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Vazaha\Mastodon\ApiClient;

trait CreatesMockClient
{
    /**
     * @param list<\GuzzleHttp\Psr7\Response> $responses
     *
     * @throws \RuntimeException
     */
    protected function createMockClient(array $responses): ApiClient
    {
        $mock = new MockHandler($responses);

        $handlerStack = HandlerStack::create($mock);
        $httpClient = new Client(['handler' => $handlerStack]);

        return new ApiClient($httpClient);
    }

    /**
     * @param array<string, string> $headers
     *
     * @throws \InvalidArgumentException
     */
    protected function createJsonResponseFromFile(int $statusCode, string $fileName, array $headers = []): Response
    {
        $json = file_get_contents(dirname(__DIR__) . '/assets/' . $fileName);

        if (!$json) {
            throw new \InvalidArgumentException('Could not read json!');
        }

        return new Response(
            $statusCode,
            array_merge([
                'Content-type' => 'application/json',
            ], $headers),
            $json,
        );
    }
}
