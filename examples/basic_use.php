<?php

declare(strict_types=1);

use Vazaha\Mastodon\Exceptions\NotFoundException;

require 'vendor/autoload.php';

// using the factory
$factory = new \Vazaha\Mastodon\Factories\ApiClientFactory();
$client = $factory->build();

// instantiate directly, with the http ClientInterface of your choice
$client = new \Vazaha\Mastodon\ApiClient(new \GuzzleHttp\Client());

// set baseuri
$client->setBaseUri('https://instance.example.org');

// get an account by id
try {
    // returns instance of \Vazaha\Mastodon\Models\AccountModel
    $account = $client->methods()->accounts()->get('the account id');
} catch (NotFoundException $e) {
    // no account exists with this id
    exit('account not found');
}

echo 'Found account: ' . $account->display_name . \PHP_EOL;

// get followers of an account (paged result)
// returns a subclass of \Illuminate\Support\Collection, which acts as a plain array
$followers = $client->methods()->accounts()->followers($account->id);

foreach ($followers as $follower) {
    echo 'Follower : ' . $follower->display_name . \PHP_EOL;
}

// get the next page(s) of results
while ($followers = $followers->getNextPage()) {
    foreach ($followers as $follower) {
        echo 'Follower : ' . $follower->display_name . \PHP_EOL;
    }
}
