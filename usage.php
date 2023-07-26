<?php

declare(strict_types=1);

use Vazaha\Mastodon\Requests\GetFollowedAccountsRequest;

require 'vendor/autoload.php';

// using the factory
$factory = new \Vazaha\Mastodon\Factories\ApiClientFactory();
$client = $factory->build();

// instantiate directly, with the http ClientInterface of your choice
$client = new \Vazaha\Mastodon\ApiClient(new \GuzzleHttp\Client());

// set baseuri
$client->setBaseUri('https://mastodon.nl');

// set clientId/clientSecret (from app created using the mastodon web interface)
$client->setClientId('clientId');
$client->setClientSecret('clientSecret');
$client->setAccessToken('token');

// or create an app:
$appRequest = new \Vazaha\Mastodon\Requests\CreateApplicationRequest(
    'my client name',
    'https://mysite.example.org/callback',
    [
        // scopes be specified as string/enum, or array of strings/enum, or a mix
        \Vazaha\Mastodon\Enums\Scope::READ,
        \Vazaha\Mastodon\Enums\Scope::WRITE,
    ],
    'https://mysite.example.org',
);
$result = $client->doRequest($appRequest);
// returns a type hinted \Vazaha\Mastodon\Models\Application instance
$app = $result->getModel();
$client->setClientId($app->client_id);
$client->setClientSecret($app->client_secret);

// request oauth token for this app, store/cache this in cache/session/db
$oAuthToken = $client->requestOAuthToken(
    redirectUri: 'https://mysite.example.org/callback',
);

// manually get/set the access_token
$accessToken = $client->getAccessToken();
$client->setAccessToken('accesstoken'); // or pass an OAuthToken instance

// oauth flow for user authorization:
$authorizeUrl = $client->getAuthorizationUrl(
    redirectUri: 'https://mysite.example.org/callback',
);

// redirect the user to this url, where user can login. The code will be sent to the callback uri in a 'code' query parameter
// use this code to request oAuth token
// in controller:
$code = $_GET['code'];
$client->requestOAuthToken(
    clientId: 'clientId',
    clientSecret: 'clientSecret',
    redirectUri: 'https://mysite.example.org/callback',
    code: $code,
);

// the client is now authenticated.
// get the lists of the user (authenticated call)
$lists = $client->doRequest(new \Vazaha\Mastodon\Requests\GetListsRequest())->getModels();

foreach ($lists as $list) {
    // $list is auto typehinted
    echo 'id: ' . $list->id . \PHP_EOL;
    echo 'title: ' . $list->title . \PHP_EOL;
    echo \PHP_EOL;
}

$result = $client->doRequest(new GetFollowedAccountsRequest('accountid'));

// get the accounts for this page
$accounts = $result->getModels();

// get next pages
while ($nextResult = $result->getNextResult()) {
    $accountsOnNextPage = $nextResult->getModels();
}
