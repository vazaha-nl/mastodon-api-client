<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Timelines;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View hashtag timeline.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 */
final class TagRequest extends \Vazaha\Mastodon\Requests\StatusRequest implements RequestInterface
{
    public function __construct(
        /**
         * The name of the hashtag (not including the # symbol).
         */
        public string $hashtag,

        /**
         * Return statuses that contain any of these additional tags.
         *
         * @var mixed[] $any
         */
        public ?array $any = null,

        /**
         * Return statuses that contain all of these additional tags.
         *
         * @var mixed[] $all
         */
        public ?array $all = null,

        /**
         * Return statuses that contain none of these additional tags.
         *
         * @var mixed[] $none
         */
        public ?array $none = null,

        /**
         * Return only local statuses? Defaults to false.
         */
        public ?bool $local = null,

        /**
         * Return only remote statuses? Defaults to false.
         */
        public ?bool $remote = null,

        /**
         * Return only statuses with media attachments? Defaults to false.
         */
        public ?bool $only_media = null,

        /**
         * Return results older than ID.
         */
        public ?string $max_id = null,

        /**
         * Return results newer than ID.
         */
        public ?string $since_id = null,

        /**
         * Return results immediately newer than ID.
         */
        public ?string $min_id = null,

        /**
         * Maximum number of results to return. Defaults to 20 statuses. Max 40
         * statuses.
         */
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/timelines/tag/%s', urlencode($this->hashtag));
    }

    public function getQueryParams(): array
    {
        return [
            'any' => $this->any,
            'all' => $this->all,
            'none' => $this->none,
            'local' => $this->local,
            'remote' => $this->remote,
            'only_media' => $this->only_media,
            'max_id ' => $this->max_id,
            'since_id' => $this->since_id,
            'min_id' => $this->min_id,
            'limit' => $this->limit,
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }
}
