<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\OAuthTokenModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\OAuthTokenModel> $models
 * @property \Vazaha\Mastodon\Requests\OAuthTokenRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\OAuthTokenModel                                            getModel()
 * @method \Illuminate\Support\Collection<array-key,      \Vazaha\Mastodon\Models\OAuthTokenModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\OAuthTokenResult                                          getNextResult()
 * @method null|\Vazaha\Mastodon\Results\OAuthTokenResult                                          getPreviousResult()
 */
class OAuthTokenResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return OAuthTokenModel::class;
    }
}
