<?php

declare(strict_types=1);

use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Models\ApplicationModel;
use Vazaha\Mastodon\Requests\Accounts\FollowersRequest;
use Vazaha\Mastodon\Requests\Accounts\GetRequest;
use Vazaha\Mastodon\Requests\Oauth\AuthorizeRequest;
use Vazaha\Mastodon\Requests\Oauth\TokenRequest;

require 'vendor/autoload.php';

// using the factory
$factory = new \Vazaha\Mastodon\Factories\ApiClientFactory();
$client = $factory->build();

// instantiate directly, with the http ClientInterface of your choice
$client = new \Vazaha\Mastodon\ApiClient(new \GuzzleHttp\Client());

// set baseuri
$client->setBaseUri('https://mastodon.nl');

// create a request and do it
$request = new GetRequest('accountid');
$result = $client->doRequest($request);
$account = $result->getModel();

// multiple results
$request = new FollowersRequest('accountid');
$result = $client->doRequest($request);
// returns Collection of Account models
$followers = $result->getModels();

$followers->each(static function (AccountModel $account): void {
    echo $account->display_name . \PHP_EOL;
    // ...
});

// get the next page
while ($result = $result->getNextResult()) {
    $accounts = $result->getModels();
    // ...
}

// authentication and authorization

// set an access token for authenticated requests
$client->setAccessToken('token');

// optional: create an app
$appRequest = new \Vazaha\Mastodon\Requests\Apps\CreateRequest(
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
    $tokenRequest = new TokenRequest(
        'client_credentials',
        $app->client_id,
        $app->client_secret,
        'https://example.org/callback',
    );

    $token = $client->doRequest($tokenRequest)->getModel();

    // store/cache this in cache/session/db/object store
    $_SESSION['mastodon_access_token'] = $token->access_token;
}

// genereate oauth authorization uri where users can log in

$authorizeRequest = new AuthorizeRequest(
    'code',
    'clientId',
    'https://example.org/callback',
    'read write',
);
$authorizeUri = $client->getUri($authorizeRequest);

// The code will be sent to the specified callback uri in a 'code' query parameter
// use this code to request oAuth token
$code = $_GET['code'];

$token = $client->doRequest(new TokenRequest(
    'authorization_code',
    'client id',
    'client_secret',
    'https://example.org/callback',
    $code,
))->getModel();
