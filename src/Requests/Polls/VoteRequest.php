<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Polls;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Vote on a poll.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\PollResult>
 *
 * @see https://docs.joinmastodon.org/methods/polls/#vote
 */
final class VoteRequest extends \Vazaha\Mastodon\Requests\PollRequest implements RequestInterface
{
    /**
     * @param string     $id      the ID of the Poll in the database
     * @param array<int> $choices provide your own votes as an index for each option (starting from 0)
     */
    public function __construct(
        public string $id,
        public array $choices,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/polls/%s/votes', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'choices' => $this->choices,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
