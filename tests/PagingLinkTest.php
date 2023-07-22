<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Responses\PagingLinks;

class PagingLinkTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $pagingLinks = new PagingLinks();
        self::assertInstanceOf(PagingLinks::class, $pagingLinks);
    }

    public function testLinksAreParsedCorrectly(): void
    {
        $pagingLinks = new PagingLinks(
            '<https://example.org/next>; rel="next", <https://example.org/previous>; rel="prev"',
        );

        self::assertEquals('https://example.org/next', $pagingLinks->getNextUrl());
        self::assertEquals('https://example.org/previous', $pagingLinks->getPreviousUrl());
    }

    public function testInvalidContentsDoesNotBreakThings(): void
    {
        $pagingLinks = new PagingLinks('FOOBAR');

        self::assertNull($pagingLinks->getNextUrl());
        self::assertNull($pagingLinks->getPreviousUrl());
    }

    public function testQueryParamsAreParsedCorrectly(): void
    {
        $pagingLinks = new PagingLinks(
            '<https://example.org/next?foo=1&bar=2>; rel="next", ' .
            '<https://example.org/previous?bla=boo&boo=baz>; rel="prev"',
        );

        $expected1 = [
            'foo' => 1,
            'bar' => 2,
        ];
        self::assertEquals($expected1, $pagingLinks->getNextQueryParams());

        $expected2 = [
            'bla' => 'boo',
            'boo' => 'baz',
        ];
        self::assertEquals($expected2, $pagingLinks->getPreviousQueryParams());
    }
}
