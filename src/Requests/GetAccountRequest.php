<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 */
final class GetAccountRequest extends AccountRequest implements RequestInterface
{
    use GetRequest;

    public function __construct(
        protected string $accountId,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/accounts/%s', urlencode($this->accountId));
    }

    public function getQueryParams(): array
    {
        return [];
    }
}
