<?php

declare(strict_types=1);

use Vazaha\Mastodon\Factories\ApiClientFactory;

require 'vendor/autoload.php';

$factory = new ApiClientFactory();
$client = $factory->build()
    ->setBaseUri('https://instance.example.org');

// manually set an access token for authenticated requests
$client->setAccessToken('token');

// create an app and get app based authorization:
$app = $client->methods()->apps()->create(
    'my client name',
    'https://mysite.example.org/callback',
    'read',
    'https://mysite.example.org',
);

if (!isset($app->client_id, $app->client_secret)) {
    exit('could not create app!');
}

// request oauth token for this app
$token = $client->methods()->oauth()->token(
    'client_credentials',
    $app->client_id,
    $app->client_secret,
    'https://example.org/callback',
);

// authorize the client with:
$client->setAccessToken($token);
// or:
$client->setAccessToken($token->access_token);

// store the $app->client_id, $app->client_secret, $token->access_token some place safe

// get user based authorization:
// generate authorize url
// (we'll reuse the app created above)
$authUrl = $client->getAuthorizeUrl(
    'code',
    $app->client_id,
    'https://mysite.example.org/callback',
    'read write',
);

// redirect user to this url, where they can log in:
header('Location: ' . $authUrl); // example!

// The code will then be sent to the specified callback uri in a 'code' query parameter
// use this code to request oAuth token

// in your controller for https://mysite.example.org/callback:
$code = $_GET['code']; // example!

// obtain a token using this code:
$token = $client->methods()->oauth()->token(
    'authorization_code', // NB: different from app token call above!
    $app->client_id,
    $app->client_secret,
    'https://mysite.example.org/callback',
    $code,
    'read write',
);
// authorize the client with:
$client->setAccessToken($token);
// or:
$client->setAccessToken($token->access_token);

// store the $app->client_id, $app->client_secret, $token->access_token some place safe
