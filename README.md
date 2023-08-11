# mastodon-api-client

A fully typed and feature complete [mastodon API](https://docs.joinmastodon.org/api/) client for PHP. 

## Features

- complete: every documented api method and entity has been implemented
- fully typed: every function, argument, property and result is typed, using generics where applicable
- documented: every api entity, method and argument is documented using docblocks, and contain a link to the relevant page at https://docs.joinmastodon.org
- tested: the code is covered by unit and integration tests, and passes phpstan analysis on the highest level
- up to date: classes are auto generated based on the [Mastodon markup documentation](https://github.com/mastodon/documentation) (in absence of a good openapi spec)

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
### Set base uri / token

```php

// set base uri (required)
$client->setBaseUri('https://instance.example');

// manually set access token
$client->setAccessToken('token...');

```

### Calling API methods

Every method is exposed through the `$client->methods()` proxy. It is highly recommended to use a [LSP enabled IDE](https://langserver.org/).

The methods are named and organized exactly like in the [official documentation](https://docs.joinmastodon.org/methods/), with documentation in docblocks. 

#### Calls with a single result

All API calls that return a single entity, will return a subclass of `\Vazaha\Mastodon\Models\Model`.

```php

try {
    // get an account by id
    // returns instance of \Vazaha\Mastodon\Models\AccountModel
    $account = $client->methods()->accounts()->get('the account id');
} catch (NotFoundException $e) {
    // no account exists with this id
    $error = $e->getError(); // instance of \Vazaha\Mastodon\Models\ErrorModel
    // ..
}

print 'Found account: ' . $account->display_name . \PHP_EOL;

```

#### Calls with multiple results

Calls that return a list of entities, will return a subclass of `\Vazaha\Mastodon\Results\Result`. This class is a subclass of `\Illuminate\Support\Collection` which can be accessed as an array. The collection will contain the result model(s) (implementations of `\Vazaha\Interfaces\ModelInterface`). The exact subclass will be type hinted and thus known to your IDE.

```php

// get the followers of account with specified id.
// returns instance of \Vazaha\Mastodon\Results\AccountResult
$followers = $client->methods()->accounts()->followers($account->id);

foreach ($followers as $follower) {
    // contains \Vazaha\Mastodon\Models\AccountModel instances
    print 'Follower : ' . $follower->display_name . \PHP_EOL;
}

```

#### Pagination

Most API calls with multiple results have a hard limit on the amount of results returned. To get the next/previous page of a result, use the `getNextPage()` / `getPreviousPage()` methods. This is done by parsing the `Link` http header. See for background: https://docs.joinmastodon.org/api/guidelines/#pagination

```php

while ($followers = $followers->getNextPage()) {
    // ...
}

```

#### Calls with empty or custom result

Some calls do not return a model or array of models. Some have an empty result, some have a custom result, like an array of strings or custom hashes, or plain text. Refer to the documentation for details. In all those cases the Result will be an instance of `\Vazaha\Mastodon\Results\EmptyOrUnknownResult`, and the collection will be empty. Retrieve the response using one of the following methods:

```php

// get the decoded json content, if available
$decoded = $result->getDecodedBody();

// get the undecoded response body
$body = $result->getBody();

// get the entire Http Response object
$response = $result->getHttpResponse();

```

#### Error handling

In case of any client (4xx) http errors, custom exceptions (subclasses of `\Vazaha\Mastodon\Exceptions\ApiErrorException`) will be thrown, containing an [Error](https://docs.joinmastodon.org/entities/Error/) object. There is a specific exception class for every status code.

#### More usage examples

See the `examples/` folder.

### Laravel support

The `ServiceProvider` class, which will be automatically detected, provides very basic Laravel support, enabling dependency injection of the ApiClient class.

```php
public function myControllerFunction(Request $request, ApiClient $client)
{
    /** @var \App\Models\User $user */
    $user = $request->user();
    $client->setBaseUri('https://instance.example')
        ->setAccessToken($user->mastodon_access_token);
    // ...
}

```

## Testing

```

# run unit tests
composer test

# run phpstan
composer analyse

```

There are some basic integration tests available as well. If you want to run these, you will need a local mastodon instance at http://mastodon.local. See https://docs.joinmastodon.org/dev/setup/#vagrant for instructions.

```

# run integration tests
composer integration-test

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

