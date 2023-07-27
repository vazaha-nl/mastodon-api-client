<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Models\OAuthTokenModel;
use Vazaha\Mastodon\Results\OAuthTokenResult;

trait RequestsOAuthTokens
{
    public function getModelClass(): string
    {
        return OAuthTokenModel::class;
    }

    public function getResultClass(): string
    {
        return OAuthTokenResult::class;
    }
}
