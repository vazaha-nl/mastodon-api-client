<?php

namespace Tests\Concerns;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use InvalidArgumentException;
use Vazaha\Mastodon\ApiClient;

trait CreatesMockClient
{
    /**
     * @param array<\GuzzleHttp\Psr7\Response> $responses
     * @return \Vazaha\Mastodon\ApiClient
     * @throws \RuntimeException
     */
    protected function createMockClient(array $responses): ApiClient
    {
        $mock = new MockHandler($responses);

        $handlerStack = HandlerStack::create($mock);
        $httpClient = new Client(['handler' => $handlerStack]);

        return new ApiClient($httpClient);
    }

    protected function createJsonResponseFromFile(string $fileName): Response
    {
        $json = file_get_contents(dirname(__DIR__) . '/assets/' . $fileName);

        if (!$json) {
            throw new InvalidArgumentException('Could not read json!');
        }

        return new Response(
            200,
            [
                'Content-type' => 'application/json',
            ],
            $json,
        );
    }
}
