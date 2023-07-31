# mastodon-api-client

A fully typed and feature complete [mastodon API](https://docs.joinmastodon.org/api/) client for PHP. 

## Requirements

- PHP >= 8.0

## Installation

This library is not yet available on packagist, but if you add this repository to your `composer.json` you should be able to install it with:
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
### Set base uri (required) and token (not required for all endpoints)

```php

// set base uri (required)
$client->setBaseUri('https://instance.example.org');

// manually set access token
$client->setAccessToken('token');

```
### Create a a request

```php

// create the request
$appRequest = new \Vazaha\Mastodon\Requests\Apps\CreateRequest(
    'my client name',
    'https://mysite.example.org/callback',
    'read write',
    'https://mysite.example.org',
);
// send the request
$result = $client->doRequest($appRequest);
// get the result model (in this case Application instance)
// this can be used to request an access token.
$app = $result->getModel();


```

See the examples folder for more details.

## Type hinting

The complete code base is fully type hinted, using generics where possible/applicable. So IDEs with language server support will be able to understand the code and all types and properties very well, with no stubs or helpers needed. 

## Auto generated classes

The mastodon API does not yet have a complete specification like [OpenAPI](https://swagger.io/specification/), auto generation of classes was a challenge.

However, it turned out to be very possible to parse the markdown from the [Markdown documentation](https://github.com/mastodon/documentation) and base the model, request, collection and result classes on this. 

The generator code can be found in the tools folder, along with the  json source data. The json files have been compiled with help of some (very quick & dirty) perl scripts. I intend to open source these scripts as well, but at the moment they are still way too rough around the edges.

## Testing

The core of the client has been extensively tested using unit tests. The complete code base also passes the most strict checks by [phpstan](https://phpstan.org/). 


```
# run tests
composer test

# run phpstan
composer analyse

```

## Coding style

Coding style is enforced using `php-cs-fixer`. 

```
# check only, no modifications will be made
composer check-style

# fix all files if possible
composer fix-style
```

## License

This software is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

