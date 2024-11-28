<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Dimensions;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\Admin\DimensionResult;

/**
 * Get dimensional data.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\DimensionResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/dimensions/#get
 */
final class GetRequest extends Request implements RequestInterface
{
    /**
     * @param list<string>        $keys               Request specific dimensions by their keystring. Supported dimensions include:
     * @param ?\DateTimeInterface $start_at           The start date for the time period. If a time is provided, it will be ignored.
     * @param ?\DateTimeInterface $end_at             The end date for the time period. If a time is provided, it will be ignored.
     * @param ?int                $limit              the maximum number of results to return for sources, servers, languages, tag or instance dimensions
     * @param null|list<mixed>    $tag_servers        tag_servers[id]: When `tag_servers` is one of the requested keys, you must provide a trending tag ID to obtain information about which servers are posting the tag
     * @param null|list<mixed>    $tag_languages      tag_languages[id]: When `tag_languages` is one of the requested keys, you must provide a trending tag ID to obtain information about which languages are posting the tag
     * @param null|list<mixed>    $instance_accounts  instance_accounts[domain]: When `instance_accounts` is one of the requested keys, you must provide a domain to obtain information about popular accounts from that server
     * @param null|list<mixed>    $instance_languages instance_languages[domain]: When `instance_accounts` is one of the requested keys, you must provide a domain to obtain information about popular languages from that server
     */
    public function __construct(
        public array $keys = [],
        public ?\DateTimeInterface $start_at = null,
        public ?\DateTimeInterface $end_at = null,
        public ?int $limit = null,
        public ?array $tag_servers = null,
        public ?array $tag_languages = null,
        public ?array $instance_accounts = null,
        public ?array $instance_languages = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/dimensions';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'keys' => $this->keys,
            'start_at' => $this->start_at,
            'end_at' => $this->end_at,
            'limit' => $this->limit,
            'tag_servers' => $this->tag_servers,
            'tag_languages' => $this->tag_languages,
            'instance_accounts' => $this->instance_accounts,
            'instance_languages' => $this->instance_languages,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return DimensionResult::class;
    }
}
