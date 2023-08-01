<?php

declare(strict_types=1);

namespace Tests;

use DateTimeInterface;
use PHPUnit\Framework\TestCase;
use Tests\Concerns\CreatesMockClient;
use Vazaha\Mastodon\Collections\Status\TagCollection;
use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Models\Status\TagModel;
use Vazaha\Mastodon\Models\StatusModel;
use Vazaha\Mastodon\Requests\Statuses\GetRequest;
use Vazaha\Mastodon\Results\StatusResult;

class StatusTest extends TestCase
{
    use CreatesMockClient;

    public function testGetStatus(): void
    {
        $client = $this->createMockClient([
            $this->createJsonResponseFromFile(200, 'status.json'),
        ])->setBaseUri('http://example.org');

        $result = $client->send(new GetRequest('foo'));

        self::assertInstanceOf(StatusResult::class, $result);

        $status = $result->getModel();

        self::assertInstanceOf(StatusModel::class, $status);
        self::assertEquals('103270115826048975', $status->id);
        self::assertInstanceOf(AccountModel::class, $status->account);
        self::assertEquals('1', $status->account->id);
        self::assertInstanceOf(DateTimeInterface::class, $status->created_at);
        self::assertInstanceOf(TagCollection::class, $status->tags);
        self::assertInstanceOf(TagModel::class, $status->tags->first());
        self::assertEquals('tagname1', $status->tags->first()->name);
    }
}
