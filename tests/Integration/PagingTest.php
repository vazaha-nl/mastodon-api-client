<?php

declare(strict_types=1);

namespace Tests\Integration;

use Vazaha\Mastodon\Models\StatusModel;
use Vazaha\Mastodon\Results\StatusResult;

class PagingTest extends IntegrationTestCase
{
    public function testPagingWorks(): void
    {
        $this->apiClient->setAccessToken($this->getAdminToken());

        foreach (range(0, 20) as $num) {
            $this->apiClient->methods()->statuses()->create('hello world part ' . $num);
        }

        sleep(10);

        $homeTimeline = $this->apiClient->methods()->timelines()->home(limit: 10);
        self::assertInstanceOf(StatusResult::class, $homeTimeline);
        self::assertCount(10, $homeTimeline);

        /** @var \Vazaha\Mastodon\Models\StatusModel $first */
        $first = $homeTimeline->first();
        self::assertInstanceOf(StatusModel::class, $first);

        $previousPage = $homeTimeline->getPreviousPage();
        self::assertNotNull($previousPage);
        self::assertCount(0, $previousPage);

        $nextPage = $homeTimeline->getNextPage();
        self::assertInstanceOf(StatusResult::class, $nextPage);
        self::assertCount(10, $nextPage);

        /** @var \Vazaha\Mastodon\Models\StatusModel $firstFromNextPage */
        $firstFromNextPage = $nextPage->first();
        self::assertInstanceOf(StatusModel::class, $firstFromNextPage);
        self::assertNotEquals($first->content, $firstFromNextPage->content);

        $firstPage = $nextPage->getPreviousPage();
        self::assertInstanceOf(StatusResult::class, $firstPage);
        self::assertCount(10, $firstPage);

        /** @var \Vazaha\Mastodon\Models\StatusModel $firstFromFirstPage */
        $firstFromFirstPage = $firstPage->first();
        self::assertInstanceOf(StatusModel::class, $firstFromFirstPage);

        self::assertEquals($first->content, $firstFromFirstPage->content);

        $pageBeforeFirstPage = $firstPage->getPreviousPage();
        self::assertNotNull($pageBeforeFirstPage);
        self::assertCount(0, $pageBeforeFirstPage);
    }
}
