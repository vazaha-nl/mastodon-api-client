<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Dimensions;

use DateTimeInterface;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Get dimensional data.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\DimensionResult>
 *
 * @see https://docs.joinmastodon.org/methods/dimensions/#get
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\Admin\DimensionRequest implements RequestInterface
{
    public function __construct(
        /**
         * Request specific dimensions by their keystring. Supported dimensions
         * include:.
         *
         * @var array<string> $keys
         */
        public array $keys,

        /**
         * The start date for the time period. If a time is provided, it will be
         * ignored.
         */
        public ?DateTimeInterface $start_at = null,

        /**
         * The end date for the time period. If a time is provided, it will be
         * ignored.
         */
        public ?DateTimeInterface $end_at = null,

        /**
         * The maximum number of results to return for sources, servers, languages,
         * tag or instance dimensions.
         */
        public ?int $limit = null,

        /**
         * tag_servers[id]: When `tag_servers` is one of the requested keys, you must
         * provide a trending tag ID to obtain information about which servers are
         * posting the tag.
         *
         * @var null|mixed[] $tag_servers
         */
        public ?array $tag_servers = null,

        /**
         * tag_languages[id]: When `tag_languages` is one of the requested keys, you
         * must provide a trending tag ID to obtain information about which languages
         * are posting the tag.
         *
         * @var null|mixed[] $tag_languages
         */
        public ?array $tag_languages = null,

        /**
         * instance_accounts[domain]: When `instance_accounts` is one of the requested
         * keys, you must provide a domain to obtain information about popular
         * accounts from that server.
         *
         * @var null|mixed[] $instance_accounts
         */
        public ?array $instance_accounts = null,

        /**
         * instance_languages[domain]: When `instance_accounts` is one of the
         * requested keys, you must provide a domain to obtain information about
         * popular languages from that server.
         *
         * @var null|mixed[] $instance_languages
         */
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
}
