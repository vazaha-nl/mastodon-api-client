<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Requests\Concerns\CreatesAccountModels;

class GetAccountRequest extends GetRequest
{
    use CreatesAccountModels;

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
