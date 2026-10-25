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
 * Revoke a quote post.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/statuses/#revoke_quote
 */
final class RevokeQuoteRequest extends Request implements RequestInterface
{
    /**
     * @param string $id                the ID of the quoted Status in the database
     * @param string $quoting_status_id the ID of the quoting Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#revoke_quote
     */
    public function __construct(
        public string $id,
        public string $quoting_status_id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/statuses/%s/quotes/%s/revoke', urlencode($this->id), urlencode($this->quoting_status_id));
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getFormParams(): array
    {
        return [];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return StatusResult::class;
    }
}
