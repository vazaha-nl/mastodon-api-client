<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Requests\Concerns\CreatesAccountModels;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;

final class LookupAccountRequest extends Request
{
    use CreatesAccountModels;
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
