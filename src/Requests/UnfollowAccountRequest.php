<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\PostRequest;

/**
 * @see https://docs.joinmastodon.org/methods/accounts/#unfollow
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 */
final class UnfollowAccountRequest extends AccountRequest implements RequestInterface
{
    use PostRequest;

    public function __construct(
        protected string $accountId,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/accounts/%s/unfollow', urlencode($this->accountId));
    }

    public function getQueryParams(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    public function getFormParams(): array
    {
        return [
        ];
    }
}
