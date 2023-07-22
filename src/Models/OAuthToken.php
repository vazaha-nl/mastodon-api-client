<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

class OAuthToken extends Model
{
    public string $access_token;

    public string $token_type;

    public string $scope;

    public int $created_at;
}
