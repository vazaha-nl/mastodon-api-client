<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Requests\Concerns\CreatesAccountModels;

class LookupAccountRequest extends Request
{
    use CreatesAccountModels;

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

    public function getFormParams(): array
    {
        return [];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }
}
