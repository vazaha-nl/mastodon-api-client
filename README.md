# mastodon-api-client

A fully typed and feature complete [mastodon API](https://docs.joinmastodon.org/api/) client for PHP. 

## Key features

- feature complete: every documented api method and entity has been implemented
- fully typed: every function, argument and property is fully typed, using generics where applicable. Also, API calls return fully typed models, where possible.
- well tested: covered by unit tests; passes phpstan analysis on the highest level
- auto generated: classes are auto generated based on the [Mastodon markup documentation](https://github.com/mastodon/documentation) (in absence of a good openapi spec)

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

### Calling API methods

Every method is exposed through the `$client->methods()` proxy. It is highly recommended to use a [LSP enabled IDE](https://langserver.org/).

The methods are named and organized exactly like in the [official documentation](https://docs.joinmastodon.org/methods/). All categories, methods and arguments have been documented using docblocks, and fully type hinted.

In case of any client (4xx) http errors, custom exceptions (subclasses of `\Vazaha\Mastodon\Exceptions\ApiErrorException`) will be thrown, containing an [Error](https://docs.joinmastodon.org/entities/Error/) object.

#### Single result calls

```php

// get an account by id
try {
    // returns instance of \Vazaha\Mastodon\Models\AccountModel
    $account = $client->methods()->accounts()->get('the account id');
} catch (NotFoundException $e) {
    // no account exists with this id
    $error = $e->getError(); // instance of \Vazaha\Mastodon\Models\ErrorModel
    // ..
}

print 'Found account: ' . $account->display_name . \PHP_EOL;

```

### Multiple result calls

```php

// get the followers of account with specified id.
// returns a subclass of \Illuminate\Support\Collection, which acts as a plain array
$followers = $client->methods()->accounts()->followers($account->id);

foreach ($followers as $follower) {
    // contains \Vazaha\Mastodon\Models\AccountModel instances
    print 'Follower : ' . $follower->display_name . \PHP_EOL;
}

```

See the `examples/` folder for more examples and usage hints.

## Testing

```

# run unit tests
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

