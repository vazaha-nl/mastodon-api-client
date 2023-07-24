<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;

/**
 * @property array<\Vazaha\Mastodon\Models\OAuthToken> $models
 *
 * @method null|\Vazaha\Mastodon\Models\OAuthToken   getModel()
 * @method array<\Vazaha\Mastodon\Models\OAuthToken> getModels()
 */
class OAuthTokenResult extends Result implements ResultInterface
{
}
