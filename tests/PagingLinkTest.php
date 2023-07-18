<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Responses\PagingLinks;

class PagingLinkTest extends TestCase
{
    public function test_can_be_instantiated(): void
    {
        $pagingLinks = new PagingLinks();
        $this->assertInstanceOf(PagingLinks::class, $pagingLinks);
    }

    public function test_links_are_parsed_correctly(): void
    {
        $pagingLinks = new PagingLinks('<https://example.org/next>; rel="next", <https://example.org/previous>; rel="prev"');

        $this->assertEquals('https://example.org/next', $pagingLinks->getNextUrl());
        $this->assertEquals('https://example.org/previous', $pagingLinks->getPreviousUrl());
    }

    public function test_invalid_contents_does_not_break_things()
    {
        $pagingLinks = new PagingLinks('FOOBAR');

        $this->assertNull($pagingLinks->getNextUrl());
        $this->assertNull($pagingLinks->getPreviousUrl());
    }

    public function test_query_params_are_parsed_correctly(): void
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
