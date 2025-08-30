<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Statuses;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\StatusResult;

/**
 * View multiple statuses.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/statuses/#index
 */
final class IndexRequest extends Request implements RequestInterface
{
    /**
     * @param null|list<string> $id the IDs of the Statuses in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#index
     */
    public function __construct(
        public ?array $id = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/statuses';
    }

    public function getQueryParams(): array
    {
        return [
            'id' => $this->id,
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
