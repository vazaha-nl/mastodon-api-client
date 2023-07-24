<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Requests\Concerns\CreatesAccountModels;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;

final class GetAccountRequest extends Request
{
    use CreatesAccountModels;
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
