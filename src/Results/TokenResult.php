<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\TokenModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\TokenModel> $models
 * @property \Vazaha\Mastodon\Requests\TokenRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\TokenResult<array-key, \Vazaha\Mastodon\Models\TokenModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\TokenResult<array-key, \Vazaha\Mastodon\Models\TokenModel> getPreviousPage()
 */
class TokenResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return TokenModel::class;
    }
}
