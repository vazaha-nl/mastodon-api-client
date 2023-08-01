<?php

declare(strict_types=1);

use Vazaha\Mastodon\Factories\ApiClientFactory;
use Vazaha\Mastodon\Models\ApplicationModel;
use Vazaha\Mastodon\Requests\Oauth\AuthorizeRequest;
use Vazaha\Mastodon\Requests\Oauth\TokenRequest;

require 'vendor/autoload.php';

$factory = new ApiClientFactory();
$client = $factory->build()
    ->setBaseUri('https://instance.example.org');

// manually set an access token for authenticated requests
$client->setAccessToken('token');

// create an app
$appRequest = new \Vazaha\Mastodon\Requests\Apps\CreateRequest(
    'my client name',
    'https://mysite.example.org/callback',
    'read',
    'https://mysite.example.org',
);
$result = $client->send($appRequest);
// returns a \Vazaha\Mastodon\Models\ApplicationModel instance
$app = $result->getModel();

if ($app instanceof ApplicationModel) {
    // request oauth token for this app
    $tokenRequest = new TokenRequest(
        'client_credentials',
        $app->client_id,
        $app->client_secret,
        'https://example.org/callback',
    );

    $token = $client->send($tokenRequest)->getModel();
    // store the $token->access_token some place safe, for re-use
}

// generate oauth authorize uri
$authorizeRequest = new AuthorizeRequest(
    'code',
    'clientId',
    'https://mysite.example.org/callback',
    'read write',
);
$authorizeUri = $client->getUri($authorizeRequest);

// redirect user to this url, where they can log in.
// The code will then be sent to the specified callback uri in a 'code' query parameter
// use this code to request oAuth token

// in your controller:
$code = $_GET['code'];

$token = $client->send(new TokenRequest(
    'authorization_code',
    'client id',
    'client_secret',
    'https://mysite.example.org/callback',
    $code,
    'read write',
))->getModel();
// store the $token->access_token some place safe
