# mastodon-api-client

A fully typed and feature complete [mastodon API](https://docs.joinmastodon.org/api/) client for PHP. 

## Goals

- Feature complete: every api method and entity implemented
- Fully typed: every function, argument and property is fully typed, using generics where applicable. Also, API calls return fully typed models, where possible.
- Well tested: Covered by unit tests and phpstan analysis on the highest level
- Auto generated: model and request classes are auto generated based on the [Mastodon markup documentation](https://github.com/mastodon/documentation) (in absence of a good openapi spec)

## Requirements

- PHP >= 8.1

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

// instantiate directly, with the httpclient implementation of your choice
$client = new \Vazaha\Mastodon\ApiClient(new \GuzzleHttp\Client());

```
### Set base uri (required) and token (not required for all endpoints)

```php

// set base uri (required)
$client->setBaseUri('https://instance.example.org');

// manually set access token
$client->setAccessToken('token...');

```

### Creating and sending requests

For every operation, there is a Request subclass, in `src/Requests`. Construct a new one with the required paramaters, and send it. See https://docs.joinmastodon.org/methods/.

In case of client (4xx) http errors, custom exceptions (subclasses of `\Vazaha\Mastodon\Exceptions\ApiErrorException`) will be thrown, containing an [Error](https://docs.joinmastodon.org/entities/Error/) object.

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

```

### Retrieving the results

The `$client->send($request)` will return a `\Vazaha\Mastodon\Results\Result` instance/subclass. 

```php

// returns one Model. The subclass depends on the request type.
$model = $result->getModel();

// returns a Collection of Models
$models = $result->getModels();

// returns the decoded JSON
$array = $result->getDecodedBody()

// returns the HTTP Response object
$response = $result->getHttpResponse();

```
### More usage examples

See the `examples/` folder.

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

# check only, no modifications will be made
composer check-style

# fix all files if possible
composer fix-style

```

## Bugs, issues, questions, comments?

Please open an issue on GitHub, send me a mail, or get in touch on Mastodon: https://mastodon.nl/@lhengstmengel.

## Author

Lennart Hengstmengel <lennart@vazaha.nl>

## License

This software is open sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

