<?php

declare(strict_types=1);

use Vazaha\Mastodon\Requests\Accounts\FollowersRequest;
use Vazaha\Mastodon\Requests\Accounts\GetRequest;

require 'vendor/autoload.php';

// using the factory
$factory = new \Vazaha\Mastodon\Factories\ApiClientFactory();
$client = $factory->build();

// instantiate directly, with the http ClientInterface of your choice
$client = new \Vazaha\Mastodon\ApiClient(new \GuzzleHttp\Client());

// set baseuri
$client->setBaseUri('https://mastodon.nl');

// create a request and send it
$request = new GetRequest('accountid');
$result = $client->send($request);
$account = $result->getModel();

// multiple results
$request = new FollowersRequest('accountid');
$result = $client->send($request);
// returns Collection of Account models
$followers = $result->getModels();

foreach ($followers as $follower) {
    print_r($follower->toArray());
    // ..
}

// get the next page
while ($result = $result->getNextResult()) {
    $accounts = $result->getModels();
    // ...
}
