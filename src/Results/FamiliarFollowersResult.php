<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\FamiliarFollowersModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\FamiliarFollowersModel> $models
 * @property \Vazaha\Mastodon\Requests\FamiliarFollowersRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\FamiliarFollowersResult<array-key, \Vazaha\Mastodon\Models\FamiliarFollowersModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\FamiliarFollowersResult<array-key, \Vazaha\Mastodon\Models\FamiliarFollowersModel> getPreviousPage()
 */
class FamiliarFollowersResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return FamiliarFollowersModel::class;
    }
}
