<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\OAuthTokenModel;

/**
 * @property array<\Vazaha\Mastodon\Models\OAuthTokenModel> $models
 *
 * @method null|\Vazaha\Mastodon\Models\OAuthTokenModel   getModel()
 * @method array<\Vazaha\Mastodon\Models\OAuthTokenModel> getModels()
 */
class OAuthTokenResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return OAuthTokenModel::class;
    }
}
