<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;

/**
 * @see https://docs.joinmastodon.org/methods/accounts/#lookup
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 */
final class LookupAccountRequest extends AccountRequest implements RequestInterface
{
    use GetRequest;

    public function __construct(
        protected string $acct,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/accounts/lookup';
    }

    public function getQueryParams(): array
    {
        return [
            'acct' => $this->acct,
        ];
    }
}
