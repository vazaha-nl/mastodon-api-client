<?php

declare(strict_types=1);

use Dotenv\Dotenv;
use Seld\CliPrompt\CliPrompt;
use Vazaha\Mastodon\Factories\ApiClientFactory;
use Vazaha\Mastodon\Requests\Oauth\AuthorizeRequest;

include dirname(__DIR__, 2) . '/vendor/autoload.php';

if (!file_exists(__DIR__ . '/.env')) {
    touch(__DIR__ . '/.env');
}

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$baseUri = $_ENV['BASE_URI'] ?? 'http://mastodon.local';

$apiClient = (new ApiClientFactory())
    ->build()
    // @phpstan-ignore argument.type
    ->setBaseUri($baseUri);

$clientId = $_ENV['CLIENT_ID'] ?? null;
$clientSecret = $_ENV['CLIENT_SECRET'] ?? null;
$accessToken = $_ENV['ACCESS_TOKEN'] ?? null;

if (is_string($accessToken)) {
    printf('Access token: %s' . \PHP_EOL, $accessToken);

    exit;
}

if (!isset($clientId, $clientSecret)) {
    echo 'Creating app ...';
    $app = $apiClient->methods()->apps()->create(
        'integration test app',
        [
            'urn:ietf:wg:oauth:2.0:oob',
        ],
        'read write push follow admin:read admin:write',
    );

    $clientId = $app->client_id;
    $clientSecret = $app->client_secret;
    echo "Done!\n";
}

if (!is_string($clientId) || !is_string($clientSecret)) {
    throw new LogicException('clientId and clientSecret must be strings');
}

$request = new AuthorizeRequest(
    'code',
    $clientId,
    'urn:ietf:wg:oauth:2.0:oob',
    'read write push follow admin:read admin:write',
);

echo "Open the following url, login, and copy/paste the authorization code here:\n";
echo $apiClient->getUri($request) . \PHP_EOL;
echo 'Authorization code: ';
$prompt = new CliPrompt();
$code = $prompt->prompt();

echo 'Getting access token ... ';
$token = $apiClient->methods()->oauth()->token(
    'authorization_code',
    $code,
    $clientId,
    $clientSecret,
    'urn:ietf:wg:oauth:2.0:oob',
    scope: 'read write push follow admin:read admin:write',
);

echo "Done!\n";
echo 'Access token: ' . $token->access_token . "\n";

$writer = new \MirazMac\DotEnv\Writer(__DIR__ . '/.env');
$writer->setValues(array_merge($_ENV, [
    'BASE_URI' => $baseUri,
    'CLIENT_ID' => $clientId,
    'CLIENT_SECRET' => $clientSecret,
    'ACCESS_TOKEN' => $token->access_token,
]));
$writer->write();
