# mastodon-api-client

A fully typed and feature complete [mastodon API](https://docs.joinmastodon.org/api/) client for PHP. 

## Goals

- Feature complete: every api method and entity should be implemented
- Fully typed: no arbitrary arrays, but only fully typed objects, methods and properties, so you and your IDE know what's up
- Well tested: Covered by unit tests and phpstan analysis on the highest level
- Auto generated: all models and requests are auto generated based on the [Mastodon markup documentation](https://github.com/mastodon/documentation) (in absence of an openapi specification)


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
### Create a a request and send it

```php

// create a request to get account with id `accountid`
$request = new \Vazaha\Mastodon\Requests\Accounts\GetRequest('accountid');

try {
    $result = $client->send($request);
} catch (\Vazaha\Mastodon\Exceptions\ApiErrorException $e) {
    print 'Statuscode : ' . $e->getCode() . PHP_EOL;
    print 'Error : ' . $e->getError()->error . PHP_EOL;
    print 'Error description : ' . ($e->getError()->error_description ?? '(not set)') . PHP_EOL;
}

$account = $result->getModel();

```

See the `examples` folder for more examples.

## Auto generated classes

Unfortunately, the mastodon API does not yet have a complete specification like [OpenAPI](https://swagger.io/specification/), auto generation of entities and methods was a challenge.

I tried using [AppMap](https://appmap.io/blog/2022/12/14/automatically-generating-openapi-docs-for-mastodon/), but so far, that turned out to be [unsuccessful](https://github.com/getappmap/appmap-ruby/issues/340). 

In the end I decided to to parse the markdown from the [Markdown documentation](https://github.com/mastodon/documentation) and base the model, request, collection and result classes on this. 

The generator code can be found in the tools folder, along with the json source data. The json files have been compiled with help of some (very quick & dirty) perl scripts. I intend to open source these scripts as well, but they need some cleaning up and refactoring first.

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

## Bugs, issues, questions?

Please open an issue on GitHub, or mail me directly at lennart@vazaha.nl.

## License

This software is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

