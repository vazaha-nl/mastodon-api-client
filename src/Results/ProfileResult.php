<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ProfileModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ProfileModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\ProfileResult<array-key, \Vazaha\Mastodon\Models\ProfileModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\ProfileResult<array-key, \Vazaha\Mastodon\Models\ProfileModel> getPreviousPage()
 */
class ProfileResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ProfileModel::class;
    }
}
