<?php

declare(strict_types=1);

namespace Tests\Integration;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Factories\ApiClientFactory;
use Vazaha\Mastodon\Models\TokenModel;

abstract class IntegrationTestCase extends TestCase
{
    protected ApiClient $apiClient;

    protected string $token;

    protected function setUp(): void
    {
        parent::setUp();
        $this->loadEnv();

        $baseUri = $_ENV['BASE_URI'] ?? 'http://mastodon.local';
        $this->apiClient = (new ApiClientFactory())
            ->build()
            // @phpstan-ignore argument.type
            ->setBaseUri($baseUri);
    }

    protected function loadEnv(): void
    {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    }

    protected function getAdminToken(): string
    {
        if (!is_string($_ENV['ACCESS_TOKEN'])) {
            exit('Key ACCESS_TOKEN not set in .env. Set it manually, or run "php get_admin_access_token.php" to retrieve one.');
        }

        return $_ENV['ACCESS_TOKEN'];
    }

    protected function getClientCredentialsToken(): TokenModel
    {
        if (!is_string($_ENV['CLIENT_ID']) || !is_string($_ENV['CLIENT_SECRET'])) {
            exit('Key CLIENT_ID and/or CLIENT_SECRET not set in .env. Set it manually, or run "php get_admin_access_token.php" to generate.');
        }

        return $this->apiClient->methods()->oauth()->token(
            'client_credentials',
            'code',
            $_ENV['CLIENT_ID'],
            $_ENV['CLIENT_SECRET'],
            'urn:ietf:wg:oauth:2.0:oob',
            scope: 'read write admin:read admin:write',
        );
    }
}
