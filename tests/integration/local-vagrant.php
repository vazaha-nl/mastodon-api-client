<?php

declare(strict_types=1);

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use PHPUnit\Framework\Assert;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\ApiErrorException;
use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Models\ApplicationModel;
use Vazaha\Mastodon\Models\ListModel;
use Vazaha\Mastodon\Models\RelationshipModel;
use Vazaha\Mastodon\Models\StatusModel;
use Vazaha\Mastodon\Models\TokenModel;
use Vazaha\Mastodon\Requests\Accounts\FollowingRequest;
use Vazaha\Mastodon\Requests\Accounts\FollowRequest;
use Vazaha\Mastodon\Requests\Accounts\LookupRequest;
use Vazaha\Mastodon\Requests\Apps\CreateRequest;
use Vazaha\Mastodon\Requests\Apps\VerifyCredentialsRequest;
use Vazaha\Mastodon\Requests\Lists\CreateRequest as ListsCreateRequest;
use Vazaha\Mastodon\Requests\Lists\GetOneRequest;
use Vazaha\Mastodon\Requests\Lists\GetRequest as ListsGetRequest;
use Vazaha\Mastodon\Requests\Oauth\AuthorizeRequest;
use Vazaha\Mastodon\Requests\Oauth\TokenRequest;
use Vazaha\Mastodon\Requests\Statuses\CreateRequest as StatusesCreateRequest;

include dirname(__DIR__, 2) . '/vendor/autoload.php';

$container = [];
$history = Middleware::history($container);

$handlerStack = HandlerStack::create();
// or $handlerStack = HandlerStack::create($mock); if using the Mock handler.

// Add the history middleware to the handler stack.
$handlerStack->push($history);

$httpClient = new Client(['handler' => $handlerStack]);

$client = (new ApiClient($httpClient))
    ->setBaseUri('http://mastodon.local');

$result = $client->send(
    new CreateRequest(
        'client from api',
        'urn:ietf:wg:oauth:2.0:oob',
        'read write',
    ),
);

$app = $result->getModel();
Assert::assertInstanceOf(ApplicationModel::class, $app);

$result = $client->send(
    new TokenRequest(
        'client_credentials',
        $app->client_id,
        $app->client_secret,
        'urn:ietf:wg:oauth:2.0:oob',
    ),
);
$token = $result->getModel();
Assert::assertInstanceOf(TokenModel::class, $token);

$client->setAccessToken($token);

$result = $client->send(
    new VerifyCredentialsRequest(),
);

$appVerification = $result->getModel();
Assert::assertInstanceOf(ApplicationModel::class, $appVerification);
print_r($app->toArray());

try {
    $result = $client->send(
        new GetOneRequest('213234234'),
    );
} catch (ApiErrorException $e) {
    $statusCode = $e->getCode();
    $error = $e->getError();
    print_r($statusCode);
    print_r($error->toArray());
}

$result = $client->send(
    new LookupRequest('admin'),
);

$adminAccount = $result->getModel();
Assert::assertInstanceOf(AccountModel::class, $adminAccount);

$following = $client->send(
    new FollowingRequest($adminAccount->id),
)->getModels();

printf('%d following' . \PHP_EOL, $following->count());

echo 'Auth url : ' . $client->getUri(
    new AuthorizeRequest(
        'code',
        $app->client_id,
        'urn:ietf:wg:oauth:2.0:oob',
        'read write',
        true,
        'nl',
    ),
);
echo \PHP_EOL;

$client->setAccessToken('f7_qlxpJ_w8G2l8nljLuSJSVBtDJeI7R-XwmheGod5A');

try {
    $list = $client->send(
        new ListsGetRequest(),
    )->getModel();
} catch (ApiErrorException $e) {
    print_r($e->getError()->toArray());
}

$list = $client->send(
    new ListsCreateRequest('is dit een lijst?'),
)->getModel();

Assert::assertInstanceOf(ListModel::class, $list);

$result = $client->send(
    new FollowRequest($adminAccount->id),
);

$relationship = $result->getModel();
Assert::assertInstanceOf(RelationshipModel::class, $relationship);
echo 'relationship:';
print_r($relationship->toArray());

$result = $client->send(
    new LookupRequest('testaccount'),
);

$myAccount = $result->getModel();

$following = $client->send(
    new FollowingRequest($myAccount->id),
)->getModels();

printf('testaccount has %d following' . \PHP_EOL, $following->count());

$status = $client->send(
    new StatusesCreateRequest(
        'hee hallo dit is het testaccount',
        [],
        spoiler_text: 'haha spoiler lol',
    ),
)->getModel();

Assert::assertInstanceOf(StatusModel::class, $status);
print_r($status->toArray());
