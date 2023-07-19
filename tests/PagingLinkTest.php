<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Responses\PagingLinks;

class PagingLinkTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $pagingLinks = new PagingLinks();
        $this->assertInstanceOf(PagingLinks::class, $pagingLinks);
    }

    public function testLinksAreParsedCorrectly(): void
    {
        $pagingLinks = new PagingLinks('<https://example.org/next>; rel="next", <https://example.org/previous>; rel="prev"');

        $this->assertEquals('https://example.org/next', $pagingLinks->getNextUrl());
        $this->assertEquals('https://example.org/previous', $pagingLinks->getPreviousUrl());
    }

    public function testInvalidContentsDoesNotBreakThings()
    {
        $pagingLinks = new PagingLinks('FOOBAR');

        $this->assertNull($pagingLinks->getNextUrl());
        $this->assertNull($pagingLinks->getPreviousUrl());
    }

    public function testQueryParamsAreParsedCorrectly(): void
    {
        $pagingLinks = new PagingLinks('<https://example.org/next?foo=1&bar=2>; rel="next", <https://example.org/previous?bla=boo&boo=baz>; rel="prev"');

        $expected1 = [
            'foo' => 1,
            'bar' => 2,
        ];
        $this->assertEquals($expected1, $pagingLinks->getNextQueryParams());

        $expected2 = [
            'bla' => 'boo',
            'boo' => 'baz',
        ];
        $this->assertEquals($expected2, $pagingLinks->getPreviousQueryParams());
    }
}
