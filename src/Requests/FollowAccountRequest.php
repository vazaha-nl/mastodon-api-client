<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\PostRequest;

/**
 * @see https://docs.joinmastodon.org/methods/accounts/#follow
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 */
final class FollowAccountRequest extends AccountRequest implements RequestInterface
{
    use PostRequest;

    /**
     * @param null|array<string> $languages
     */
    public function __construct(
        protected string $accountId,
        protected bool $reblogs = false,
        protected bool $notify = false,
        protected ?array $languages = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/accounts/%s/follow', urlencode($this->accountId));
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
            'reblogs' => $this->reblogs,
            'notify' => $this->notify,
            'languages' => $this->languages,
        ];
    }
}
