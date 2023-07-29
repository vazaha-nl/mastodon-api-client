<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\CarbonInterface;

/**
 * @see https://docs.joinmastodon.org/entities/Token/
 */
class OAuthTokenModel extends Model
{
    public string $access_token;

    public string $token_type;

    public string $scope;

    public CarbonInterface $created_at;
}
