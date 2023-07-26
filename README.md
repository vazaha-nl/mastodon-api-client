# mastodon-api-client

A fully typed mastodon API client for PHP.

## Requirements

- PHP >= 8.0

## Installation

```
composer require vazaha-nl/mastodon-api-client
```

## Usage

### Create the api client

```php

// using the factory
$factory = new \Vazaha\Mastodon\Factories\ApiClientFactory();
$client = $factory->build();

// instantiate directly, with the http ClientInterface of your choice
$client = new \Vazaha\Mastodon\ApiClient(new \GuzzleHttp\Client());

```
### Set needed properties

```php

// set base uri (required)
$client->setBaseUri('https://instance.example.org');

// set clientId and clientSecret (from app created using the mastodon web interface)
$client->setClientId('clientId');
$client->setClientSecret('clientSecret');

// manually set access token
$client->setAccessToken('token');

```
### Create an app

```php

// create the request
$appRequest = new \Vazaha\Mastodon\Requests\CreateApplicationRequest(
    'my client name',
    'https://mysite.example.org/callback',
    [
        // scopes be specified as string/enum, or array of strings/enum, 
        // or a combination of both
        \Vazaha\Mastodon\Enums\Scope::READ,
        \Vazaha\Mastodon\Enums\Scope::WRITE,
    ],
    'https://mysite.example.org',
);
// send the request
$result = $client->doRequest($appRequest);
// get the result model (in this case Application instance)
$app = $result->getModel();
$client->setClientId($app->client_id);
$client->setClientSecret($app->client_secret);


```

### Request an oauth access token

#### App scope authorization

```php
// request oauth token for this app
// store/cache the access token somewhere in cache/session/db
$oAuthToken = $client->requestOAuthToken(
    redirectUri: 'https://mysite.example.org/callback',
);

// manually get/set the access_token
$accessToken = $client->getAccessToken();
$client->setAccessToken('accesstoken'); 
// or pass an OAuthToken instance
$client->setAccessToken($oAuthToken); 

```

#### User scope authorization

```php
// oauth flow for user authorization:
$authorizeUrl = $client->getAuthorizationUrl(
    redirectUri: 'https://mysite.example.org/callback',
);

// redirect the user to this url
// After logging in, the code will be sent to the callback uri in a 'code' query parameter
$code = $_GET['code'];

// same as above but note the code parameter
$oAuthToken = $client->requestOAuthToken(
    clientId: 'clientId',
    clientSecret: 'clientSecret',
    redirectUri: 'https://mysite.example.org/callback',
    code: $code,
);

```

### Pagination

Pagination handled transparantly by the Result / Request classes.

```php
$result = $client->doRequest(new GetFollowedAccountsRequest('accountid'));

// get the accounts for this page
$accounts = $result->getModels();

// get next pages
while ($nextResult = $result->getNextResult()) {
    $accountsOnNextPage = $nextResult->getModels();
    // ...
}

```

## Testing

```
# run tests
composer test
# run phpstan
composer analyse

```

## Coding style

Coding style is enforced using `php-cs-fixer`.

```
composer check-style
composer fix-style
```

## License

This software is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

