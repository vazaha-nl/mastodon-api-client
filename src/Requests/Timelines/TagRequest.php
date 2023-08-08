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
 *
 * @see https://docs.joinmastodon.org/methods/timelines/#tag
 */
final class TagRequest extends \Vazaha\Mastodon\Requests\StatusRequest implements RequestInterface
{
    /**
     * @param string             $hashtag    the name of the hashtag (not including the # symbol)
     * @param null|array<string> $any        return statuses that contain any of these additional tags
     * @param null|array<string> $all        return statuses that contain all of these additional tags
     * @param null|array<string> $none       return statuses that contain none of these additional tags
     * @param ?bool              $local      return only local statuses? Defaults to false
     * @param ?bool              $remote     return only remote statuses? Defaults to false
     * @param ?bool              $only_media return only statuses with media attachments? Defaults to false
     * @param ?string            $max_id     return results older than ID
     * @param ?string            $since_id   return results newer than ID
     * @param ?string            $min_id     return results immediately newer than ID
     * @param ?int               $limit      Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     */
    public function __construct(
        public string $hashtag,
        public ?array $any = null,
        public ?array $all = null,
        public ?array $none = null,
        public ?bool $local = null,
        public ?bool $remote = null,
        public ?bool $only_media = null,
        public ?string $max_id = null,
        public ?string $since_id = null,
        public ?string $min_id = null,
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
