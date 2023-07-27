<?php

declare(strict_types=1);

use Vazaha\Mastodon\Models\ApplicationModel;
use Vazaha\Mastodon\Requests\GetAccountFollowersRequest;
use Vazaha\Mastodon\Requests\GetAccountRequest;

require 'vendor/autoload.php';

// using the factory
$factory = new \Vazaha\Mastodon\Factories\ApiClientFactory();
$client = $factory->build();

// instantiate directly, with the http ClientInterface of your choice
$client = new \Vazaha\Mastodon\ApiClient(new \GuzzleHttp\Client());

// set baseuri
$client->setBaseUri('https://mastodon.nl');

// create a request and do it
$request = new GetAccountRequest('accountid');
$result = $client->doRequest($request);
$account = $result->getModel();

if (!$account) {
    // multiple results
    $request = new GetAccountFollowersRequest('accountid');
}
$result = $client->doRequest($request);
$followers = $result->getModels();

// get the next pages
while ($result = $result->getNextResult()) {
    $accounts = $result->getModels();
    // ...
}

// Auth

// set an access token for authenticated requests
$client->setAccessToken('token');

// optional: create an app
$appRequest = new \Vazaha\Mastodon\Requests\CreateApplicationRequest(
    'my client name',
    'https://mysite.example.org/callback',
    'read',
    'https://mysite.example.org',
);
$result = $client->doRequest($appRequest);
// returns a \Vazaha\Mastodon\Models\ApplicationModel instance
$app = $result->getModel();

if ($app instanceof ApplicationModel) {
    // request oauth token for this app
    $oAuthToken = $client->requestOAuthToken(
        $app->client_id,
        $app->client_secret,
        'https://mysite.example.org/callback',
    );

    // store/cache this in cache/session/db/object store
    $_SESSION['mastodon_access_token'] = $oAuthToken->access_token ?? null;
}

// genereate oauth authorization uri where users can log in
$authorizeUrl = $client->getAuthorizationUrl(
    'clientId',
    'https://mysite.example.org/callback',
    'read write',
);

// The code will be sent to the specified callback uri in a 'code' query parameter
// use this code to request oAuth token
$code = $_GET['code'];
$oAuthToken = $client->requestOAuthToken(
    'clientid',
    'clientSecret',
    'https://mysite.example.org/callback',
    $code,
);
