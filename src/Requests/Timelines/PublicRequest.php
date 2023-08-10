<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Timelines;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\StatusResult;

/**
 * View public timeline.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/timelines/#public
 */
final class PublicRequest extends Request implements RequestInterface
{
    /**
     * @param ?bool   $local      show only local statuses? Defaults to false
     * @param ?bool   $remote     show only remote statuses? Defaults to false
     * @param ?bool   $only_media show only statuses with media attached? Defaults to false
     * @param ?string $max_id     return results older than ID
     * @param ?string $since_id   return results newer than ID
     * @param ?string $min_id     return results immediately newer than ID
     * @param ?int    $limit      Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     */
    public function __construct(
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
        return '/api/v1/timelines/public';
    }

    public function getQueryParams(): array
    {
        return [
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

    public function getResultClass(): string
    {
        return StatusResult::class;
    }
}
